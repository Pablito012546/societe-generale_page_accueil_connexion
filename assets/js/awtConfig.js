




    


































    
        
            
    
    



    
    
    
        
            
        
        
    






    























// <script>

    (function(_oldAwtConfig, exports){

        var appLoaded = [];

        /**
         * AwtConfig Constructor
         * @constructor
         * @description The constructor for AWTConfig class
         * @params {string} appName The application name
         * @params {string} sdcName The sdc name. Not used in V3.
         * @params {object} options Options that will be concatenated with gf configuration.
         *
         */
        var awtConfig = function(appName, sdcName, options){
            this.appName = appName;
            this.sdcName = sdcName;
            this.options = options;

            this.setParameter(appName, "options", options || {});

            this.loadedCSS = {};
        };

        /**
         * extend function
         * @description It can extend objects recursively
         * @params {object} object,... List of objects to concatenate. An unlimited numbers of objects can be provided.
         * @returns {object} sourceObject with all others concatenated.
         */
        awtConfig.extend = function(){

            var args = Array.prototype.splice.call(arguments, 1, arguments.length);
            var source = arguments[0];
            var objAdd;

            if( typeof source !== "object"){
                return source;
            }

            while(objAdd = args.shift()){
                if( typeof objAdd === "object") {
                    for(var attr in objAdd ){
                        source[attr] = objAdd[attr];
                    }
                }
            }

            return source;
        };

        /**
         * Mise en place d'un loader.
         * Chargement des ressources (socle, css SDC)
         *
         */
        awtConfig.prototype.load = function(options, callback){

            var me = this;

            // reload default root on multiple call of window.myApp.load();
//            if( typeof window.AWT !== "undefined" )
//            {
//                window.AWT.Backbone.history.navigate(awtConfig.prototype.gfConfigs.gf[this.appName].defaultRoute, {
//                    trigger: false
//                });
//                window.AWT.Backbone.history.loadUrl(awtConfig.prototype.gfConfigs.gf[this.appName].defaultRoute);
//                return;
//            }

            this.appendLoader();

            // run if application has already been loaded.
            if( me.appName in appLoaded ){
                _run();
            }

            if( !window.AWT ) {
                // load awt-frameworks if it hasn't been loaded yet
                me.loadScriptAsynchronously(me.socleUrl(me.appName), null, _loadSdc);
            } else {
                // directly load sdc if awt-frameworks are available
                _loadSdc();
            }

            /**
             * load sdc files
             * @description load CSS and JS files
             */
            function _loadSdc(){
                me.loadStyleAsynchronously(me.appName);

                me.loadScriptAsynchronously(me.resourceUrl(me.appName), null, _run);
            }

            /**
             * run command
             * @description run AWT application if promise is provided.
             * Run immediately if not.
             **/
            function _run(){
                if( window.AWT.ready ) {
                    window.AWT.ready(_runCallback);
                }else{
                    _runCallback();
                }

            }

            /**
             * run callback command
             * @description Execute callback when application is ready
             */
            function _runCallback(){

                // set awt appendLoader to app configuration
                me.setParameter(me.appName, "appendLoader", function() { me.appendLoader(); });

                // set awt removeLoader to app configuration
                me.setParameter(me.appName, "removeLoader", function() { me.removeLoader(); });

                if( me.getParameter(me.appName, "autoRemoveLoader") ) me.removeLoader();

                // Déclenche l'instanciation de la SDC
                me.gfConfigs.gf[me.appName].loadingCallback.call(me);

                if( ! me.appName in appLoaded ) appLoaded.push(me.appName);

                callback && callback();
            }
        };

        /**
         * load stylesheet file
         * @description Load CSS files with AWT retro-compatibiliy
         */
        awtConfig.prototype.loadStyleAsynchronously = function loadStyleAsynchronously(appName){

            var file;
            var cssType;
            var type = this.getNavigator();
            var hasOwnProperty = Object.prototype.hasOwnProperty;
            var cssList = this.getParameter(appName, "css");

            if( type !== "ie" && this.getParameter(appName, "modeIntegration") === "PORTAIL" ){
                cssType = "portail";
            }else if( type === "ie" && this.getParameter(appName, "modeIntegration") === "PORTAIL" ){
                cssType = "iePortail";
            }else if( type === "ie" && this.getParameter(appName, "modeIntegration") !== "PORTAIL" ){
                cssType = "ie";
            }else{
                cssType = "defaut";
            }

            for (var cssFile in cssList[cssType]){
                if (!hasOwnProperty.call(cssList[cssType], cssFile)) {
                    continue;
                }

                if( !this.getParameter(appName, "commonResourcesRequired") && cssList[cssType][cssFile] === "../../scss/common.html" ){
                    continue;
                }

                file = cssList[cssType][cssFile];
                if (this.getParameter(appName, "context") && typeof(this.getParameter(appName, "context").enseigne) !== 'undefined') {
                  file = file.replace(/%enseigne%/g, this.getParameter(appName, "context").enseigne);
                }

                this.loadCSS(file);

            }
        };

        /**
         * get configuration app parameter
         * @description Get configuration application parameter for a specific SDC
         * @params {string} appName The application name
         * @params {string} paramName The parameter name
         * @returns {any|undefined} Undefined if parameter hasn't been founded.
         */
        awtConfig.prototype.getParameter = function(appName, paramName){

            if( !awtConfig.prototype.gfConfigs.gf[appName]) return undefined;

            return awtConfig.prototype.gfConfigs.gf[appName][paramName];

        };

        /**
         * set configuration app parameter
         * @description Set configuration application parameter for a specific SDC
         * @params {string} appName The application name
         * @params {string} paramName The parameter name
         * @params {string} paramValue The parameter value
         * @returns {any|undefined} Undefined if parameter hasn't been founded.
         */
        awtConfig.prototype.setParameter = function(appName, paramName, paramValue){

            if( !awtConfig.prototype.gfConfigs.gf[appName]) return null;

            awtConfig.prototype.gfConfigs.gf[appName][paramName] = paramValue;

            return awtConfig.prototype.gfConfigs.gf[appName][paramName];

        };

        /**
         * Get navigator
         * @returns {string}
         */
        awtConfig.prototype.getNavigator = function () {
            return (navigator.appName.indexOf("Microsoft Internet Explorer") >= 0 && ( navigator.appVersion.indexOf("MSIE 8.0") >= 0) || navigator.appVersion.indexOf("MSIE 7.0") >= 0 ) ? "ie" : "defaut";
        };

        /**
         *
         * @param href
         * @param before
         * @param media
         * @returns {HTMLElement}
         */
        awtConfig.prototype.loadCSS = function (href, before, media) {
            if (this.loadedCSS[href]) {
                return;
            }

            // Arguments explained:
            // `href` is the URL for your CSS file.
            // `before` optionally defines the element we'll use as a reference for injecting our <link>
            // By default, `before` uses the first <script> element in the page.
            // However, since the order in which stylesheets are referenced matters, you might need a more specific location in your document.
            // If so, pass a different reference element to the `before` argument and it'll insert before that instead
            // note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
            var ss = window.document.createElement("link");
            var ref = before || window.document.getElementsByTagName("script")[0];
            ss.rel = "stylesheet";
            ss.href = href;
            // temporarily, set media to something non-matching to ensure it'll fetch without blocking render
            ss.media = "only x";
            // inject link
            ref.parentNode.insertBefore(ss, ref);
            // set media back to `all` so that the stylesheet applies once it loads
            setTimeout(function () {
                ss.media = media || "all";
            });

            this.loadedCSS[href] = true;

            return ss;
        };

        /**
         * Load script with callback
         * @param url
         * @param attr
         * @param callback
         */
        awtConfig.prototype.loadScriptAsynchronously = function loadScriptAsynchronously(url, attr, callback) {
            if(typeof define !== "undefined" && define != null && define.amd){
                var v3require = requirejs.config({
                    context: "____v3"
                });

                v3require([url], callback);
            }else{
                // adding the script tag to the head as suggested before
                var head = document.getElementsByTagName('head')[0];
                var scriptElement = document.createElement('script');
                scriptElement.type = 'text/javascript';
                scriptElement.src = url;

                if(!callback) callback = function(){}; // ★★★★★★★★★ JUST ADD THIS LINE!

                if (attr) {
                    for( var attribute in attr ){
                        scriptElement.setAttribute(attribute, attr[attribute]);
                    }

                }

                // bind the event to the callback function
                if(scriptElement.addEventListener) {
                    scriptElement.addEventListener("load", callback, false); // IE9+, Chrome, Firefox
                }
                else if(scriptElement.readyState) {
                    scriptElement.onreadystatechange = function(){
                        if( this.readyState === "loaded" || this.readyState === "complete" ){
                            callback.apply(this, arguments);
                        }
                    }; // IE8
                }

                // fire the loading
                head.appendChild(scriptElement);
            }
        };

        /**
         * Retrieve socle URL
         * @description get the socle public url specified on the configuration
         * @params {string} appName The application name
         * @returns {string} socleUrl The public url to awt-frameworks.js
         */
        awtConfig.prototype.socleUrl = function socleUrl(appName) {
            return awtConfig.prototype.gfConfigs.gf[appName].socleResourcesUrlPrefix+"/webpack/awt-frameworks.js";
        };

        /**
         * Retrieve resource URL
         * @description get the resource public url specified on the configuration
         * @params {string} appName The application name
         * @returns {string} socleUrl The public url to awt-{appName}.js
         */
        awtConfig.prototype.resourceUrl = function resourceUrl(appName) {
            return awtConfig.prototype.gfConfigs.gf[appName].awtResourcesUrlPrefix+"/dist/awt-"+this.appName+".js";
        };

        /**
         * No conflict awtConfig
         * @description use to return old awtConfig when this one is loaded. Can prevent incompatibility with
         * V2 and V3.
         * @returns {object} _oldAwtConfig The old awt config before this one was loaded.
         */
        awtConfig.noConflict = function(){
            window.awtConfig = _oldAwtConfig;
            return awtConfig;
        };

        if( _oldAwtConfig && _oldAwtConfig.prototype.gfConfigs ){
            awtConfig.prototype.gfConfigs = _oldAwtConfig.prototype.gfConfigs;
        }else{
            awtConfig.prototype.gfConfigs = {};
            awtConfig.prototype.gfConfigs.gf = {};
        }

        /**
         * Affiche un loader global
         */
        awtConfig.prototype.appendLoader = function(){

            var options = this.getParameter(this.appName, "options");
            var loader = options.loader || this.getParameter(this.appName, "loader");
            var sdcWrapper = options.sdcWrapper || this.getParameter(this.appName, "sdcWrapper");
            var sdcWrapperElement = document.getElementById(sdcWrapper ? sdcWrapper : 'sdcWrapper');
            var loaderElement;

            this.removeLoader();

            if( loader && sdcWrapperElement ){
                loaderElement = document.createElement('div');
                loaderElement.innerHTML = loader;
                loaderElement.className = "global-loader-container";

                this.setParameter(this.appName, "loaderElement", loaderElement)

                sdcWrapperElement.appendChild(loaderElement);

                /**
                 * Le portail BDDF ne fixe pas de hauteur pour la zone du milieu dans laquelle est injectée l'AWT.
                 * Pour centrer le loader sur la hauteur disponible, nous forçons la hauteur via js.
                 */
                if (document.getElementById("n2g_zone_milieu")) {
                    sdcWrapperElement.style.position = "relative";
                    sdcWrapperElement.style.height = "100%";

                    if( document.getElementById("awt--root-element") ){
                        document.getElementById("awt--root-element").style.height = document.getElementById("n2g_zone_milieu").clientHeight + "px";
                    }
                }
            }
        };

        /**
         * Masque le loader global
         */
        awtConfig.prototype.removeLoader = function(){

            var options = this.getParameter(this.appName, "options");
            var sdcWrapper = options.sdcWrapper || this.getParameter(this.appName, "sdcWrapper");
            var loaderElement = this.getParameter(this.appName, "loaderElement");
            var sdcWrapperElement = document.getElementById(sdcWrapper ? sdcWrapper : 'sdcWrapper');

            if( loaderElement && sdcWrapperElement){
                try{
                    sdcWrapperElement.removeChild(loaderElement);
                    sdcWrapperElement.removeAttribute("style");
                    if( document.getElementById("awt--root-element") ){
                        document.getElementById("awt--root-element").removeAttribute("style");
                    }
                }catch(e){}
            }
        };

        /**
         *
         * @type {{commonsRequire: {current: null}, socleRequire: {current: null}, gf: {default: {modeIntegration: string, commonResourcesRequired, isSocleOptimized, context: {marche: string, enseigne: string}, sdcHash: (Array|{index: number, input: string}), commonResourcesUrlPrefix: string, socleResourcesUrlPrefix: string, awtResourcesUrlPrefix: string, niveauMinimalLogSurServeur: string, logMaxSizeMessage: number, sdcRoutes: Array, css: {defaut: string[], ie: string[], portail: string[], iePortail: string[]}}}}}
         */
        awtConfig.prototype.gfConfigs.gf.depotPJ = {
            awtRootElement: 'awt--root-element',
            modeIntegration: 'NGIM',
            isResponsive: true,
            hasCoque: true,
            autoRemoveLoader: true,
            loader:'<div class="global-loader round-awt-loader" style="position:absolute; z-index:999; left:0;top:0;width:100%;height:100%;"><img style="position: absolute;left: 50%;top: 50%;margin-left: -25px;" alt="sdc-loading" src="data:image/gif;base64,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" /></div>',
            commonResourcesRequired: false,
            isSocleOptimized: false,
            sdcHash: location.hash.replace(/([\'\"\<\>])/g, '').match(/[^/#]+/),
            commonResourcesUrlPrefix: '',
            socleResourcesUrlPrefix: '/icd/depotPJ/ext/resources/socle-webpack/62f10b86',
            awtResourcesUrlPrefix: '/icd/depotPJ/resources/62f10b86/depotPJ',
            niveauMinimalLogSurServeur: 'ERROR',
            loadingCallback: function(){
                this.api = new window.AWT.sdc["Awt_"+this.appName](awtConfig.prototype.gfConfigs.gf[this.appName]);
                this.api.start(this.options);
            },
            logMaxSizeMessage: 200,
            sdcWrapper: "sdcWrapper",
            sdcRoutes: [],
            css: {
                defaut: [
                    "/icd/depotPJ/resources/62f10b86/depotPJ/common/scss/%enseigne%/awt-front-%enseigne%.css"
                ],
                ie: [
                    "/icd/depotPJ/resources/62f10b86/depotPJ/common/scss/%enseigne%/awt-front-%enseigne%.css"
                ],
                portail: [
                    "/icd/depotPJ/resources/62f10b86/depotPJ/common/scss/%enseigne%/awt-front-%enseigne%.css"
                ],
                iePortail: [
                    "/icd/depotPJ/resources/62f10b86/depotPJ/common/scss/%enseigne%/awt-front-%enseigne%.css"
                ]
            }
        };

        var context = {};
                
                context.marche = 'PRI';
                context.enseigne = 'BDDF';
                context.banque = 'bddf';
                
                
                context.media = 'site-web';
                

                awtConfig.extend(awtConfig.prototype.gfConfigs.gf.depotPJ, {
                    
                    isSupervisorMode: false,
                    
                    context: context
                });

            /**
         *
         *
         * @type {{modeIntegration: string, communRequire: {current: null, 1.0: null, 1.1: null}, socleRequire: {current: null, 1.0: null, 1.1: null}, gf: {sdd: {context: {marche: string, enseigne: string}, sdcHash: (Array|{index: number, input: string}), commonResourcesUrlPrefix: string, socleResourcesUrlPrefix: string, awtResourcesUrlPrefix: string, niveauMinimalLogSurServeur: string, logServicesUrls: {defaut: string, socle: string, commun: string, sdc: string, synthese: string}, logMaxSizeMessage: number, defaultRoute: string, sdcRoutes: string[], baseUrlService: {defaultMock: string, defaultUrl: string, /prelevements/*: string, /prelevements.json: string, /prelevements/detail.json: string, /prelevements/contester.json: string, /prelevements/codeRevocation.json: string, /comptes.json: string, /creanciers/mandat.json: string, /creanciers/mandats.json: string, /creanciers/detail.json: string, /creanciers.json: string, /contestations.json: string, /creanciers/opposer.json: string, /creanciers/genererJetonTransactionnel.json: string, /preSignature.json: string}, otherGFUrl: {prelevement: string}, css: {defaut: string[], ie: string[]}, menu: *[]}, consult: {context: {marche: string, enseigne: string}, sdcHash: (Array|{index: number, input: string}), commonResourcesUrlPrefix: string, socleResourcesUrlPrefix: string, awtResourcesUrlPrefix: string, niveauMinimalLogSurServeur: string, logServicesUrls: {defaut: string, socle: string, commun: string, sdc: string, synthese: string}, logMaxSizeMessage: number, defaultRoute: string, sdcRoutes: string[], baseUrlService: {defaultMock: string, defaultUrl: string, /comptes/comptes.json: string, /comptes/montant-total.xml: string, /mouvements.json: string}, otherGFUrl: {prelevement: string}, css: {defaut: string[], ie: string[]}, menu: *[]}}}}
         */
        awtConfig.extend(awtConfig.prototype.gfConfigs.gf.depotPJ, {
            modeIntegration: "NGIM",

            swmResourcesUrlPrefix: "/swm/resources",

            /**
             * Version de l'application depotPJ
             */
            gfVersion : "2.11.1",

            /**
             * Version du socle AWT
             */
            

            /**
             * Callback de chargement de l'application WEBPACK
             * Version requirejs :
             * Ignoré. Le chargement de l'application est fait en interne dans le socle AWT.
             *
             * Version webpack :
             * Fais automatiquement par le fichier awtConfig.tag. Il est toutefois possible de surcharger ce callback
             * dans l'application.
             *
             * Exemple :
             *
             * loadingCallback: function(){
             *  try {
             *        this.api = new window.AWT.sdc.Awt_depotPJ(awtConfig.prototype.gfConfigs.gf.depotPJ);
             *        this.api.start(this.options);
             *    }catch(e){
             *        console.error(e);
             *        console.error("APP not ready !");
             *    }
             * },
             */
            // loadingCallback: function(){},


            /**
             * URL des services de log
             */
            logServicesUrls: {
                defaut: "/icd/depotPJ/data/depotPJ-log-authsec.json"
                
                
                
                
            },

            /**
             * Deprecated. Paramètre obsolète
             */
            hasCoque: false,

            /**
             * Route par défaut lors du chargement de l'application
             */
            defaultRoute: '#depotPJ/',

            /**
             * Liste des points d'entrés des différentes SDC
             */
            sdcRoutes: [
                "#depotPJ/"
            ],

            /**
             * Prefix pour les urls de services
             */
            baseUrlService: {
                defaultUrl: '/icd/depotPJ/data'
            },

            controlesFichierServiceCall: {
                secondPollingInterval:  '4000',
                pollingInterval:  '1000',
                pollingDuration:  '60000'
            },
            loader:'<div style="position:absolute; z-index:999; left:0;top:0;width:100%;height:100%;"><img style="position: absolute;left: 50%;top: 50%;margin-left: -25px;" alt="loading" src="data:image/gif;base64,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"></div>',


             sdcWrapperCustomCss: "depotPjCSSWrapper",
            /**
             * Chargement des fichier CSS
             */
            css: {
                defaut: [
                    "/icd/depotPJ/resources/62f10b86/depotPJ/common/scss/%enseigne%/gf-RWD_BDDF.css"
                ],
                ie: [
                    "/icd/depotPJ/resources/62f10b86/depotPJ/common/scss/%enseigne%/gf-ie8_BDDF.css"
                ],
                portail: [
                    "/icd/depotPJ/resources/62f10b86/depotPJ/common/scss/%enseigne%/gf-portail_BDDF.css"
                ],
                iePortail: [
                    "/icd/depotPJ/resources/62f10b86/depotPJ/common/scss/%enseigne%/gf-portail-ie8_BDDF.css"
                ]
            }
        });

        exports.awtConfig = awtConfig;


    })(window.awtConfig, window);

    //</script>



