;(function(window) {

  var svgSprite = '<svg>' +
    '' +
    '<symbol id="icon-anzhuo" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M963.615476 347.084253q23.341923 0 39.579783 14.71556t16.23786 36.027751l0 299.38554q0 20.297325-16.23786 35.012885t-39.579783 14.71556l-18.267592 0q-23.341923 0-39.579783-14.71556t-16.23786-35.012885l0-299.38554q0-21.312191 16.23786-36.027751t39.579783-14.71556l18.267592 0zM140.558957 347.084253q23.341923 0 38.564917 14.71556t15.222994 36.027751l0 299.38554q0 20.297325-15.222994 35.012885t-38.564917 14.71556l-18.267592 0q-23.341923 0-39.579783-14.71556t-16.23786-35.012885l0-299.38554q0-21.312191 16.23786-36.027751t39.579783-14.71556l18.267592 0zM700.76512 111.635286q18.267592 8.11893 38.057484 22.327057t38.057484 33.490586 31.968286 42.116949 19.789892 48.206146l-576.444023 0q16.23786-53.787911 51.250745-88.293363t70.533204-54.802777l-51.758178-81.189299q-2.029732-2.029732-0.507433-7.611497t10.656095-11.670962q8.11893-7.104064 15.222994-6.596631t9.133796 2.537166l52.773044 83.219031q28.416255-13.193261 59.877108-20.297325t64.951439-7.104064q69.010904 0 128.888012 28.416255l53.787911-84.233898q2.029732-2.029732 7.611497-2.029732t16.745293 6.089197q10.148662 5.074331 11.670962 9.133796t-0.507433 6.089197zM417.61744 198.913783q13.193261 0 22.327057-9.133796t9.133796-22.327057-9.133796-22.327057-22.327057-9.133796-22.327057 9.133796-9.133796 22.327057 9.133796 22.327057 22.327057 9.133796zM667.274534 194.854318q13.193261 0 22.327057-9.133796t9.133796-22.327057-9.133796-22.327057-22.327057-9.133796-22.327057 9.133796-9.133796 22.327057 9.133796 22.327057 22.327057 9.133796zM828.638266 321.712597l1.014866 456.689807q0 22.327057-14.71556 37.550051t-36.027751 15.222994l-14.208127 0 0 142.081273q0 20.297325-14.71556 35.520318t-36.027751 15.222994l-29.431121 0q-20.297325 0-35.012885-15.222994t-14.71556-35.520318l0-142.081273-186.735388 0 0 142.081273q0 20.297325-14.71556 35.520318t-36.027751 15.222994l-29.431121 0q-20.297325 0-35.012885-15.222994t-14.71556-35.520318l0-142.081273-11.163529 0q-21.312191 0-36.027751-15.222994t-14.71556-37.550051l0-456.689807 572.384558 0z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-msnui-pc" viewBox="0 0 1025 1024">' +
    '' +
    '<path d="M898.196 110.331h-771.82c-35.52 0-64.318 28.767-64.318 64.318v514.515c0 35.522 28.798 64.319 64.318 64.319h321.592v96.478h-160.797c-17.743 0-32.16 14.415-32.16 32.159v32.155h514.548v-32.155c0-17.744-14.415-32.159-32.16-32.159h-160.796v-96.478h321.592c35.52 0 64.319-28.797 64.319-64.319v-514.515c0-35.551-28.799-64.318-64.319-64.318zM480.127 689.165c0-17.744 14.414-32.158 32.159-32.158 17.743 0 32.158 14.414 32.158 32.158 0 17.777-14.415 32.192-32.158 32.192-17.743-0.001-32.159-14.415-32.159-32.192zM126.375 624.846v-450.197h771.82v450.197h-771.82z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '<symbol id="icon-apple" viewBox="0 0 1024 1024">' +
    '' +
    '<path d="M836.608 675.84q41.984 59.392 96.256 76.8-23.552 72.704-74.752 151.552-78.848 118.784-155.648 118.784-28.672 0-84.992-19.456-52.224-19.456-91.136-19.456t-86.016 20.48q-49.152 19.456-80.896 19.456-92.16 0-181.248-156.672-89.088-154.624-89.088-304.128 0-138.24 67.584-226.304 69.632-88.064 172.032-88.064 22.528 0 50.176 5.632t57.344 20.992q31.744 17.408 52.224 24.064t31.744 6.656q13.312 0 40.96-6.144t55.296-22.528q29.696-16.384 51.2-24.576t44.032-8.192q71.68 0 129.024 38.912 30.72 20.48 62.464 60.416-47.104 40.96-68.608 71.68-39.936 57.344-39.936 124.928 0 74.752 41.984 135.168zM630.784 197.632q-35.84 33.792-65.536 44.032-10.24 3.072-26.112 5.632t-36.352 4.608q1.024-90.112 47.104-155.648t151.552-90.112q2.048 10.24 3.072 14.336l0 11.264q0 36.864-17.408 82.944-18.432 45.056-56.32 82.944z"  ></path>' +
    '' +
    '</symbol>' +
    '' +
    '</svg>'
  var script = function() {
    var scripts = document.getElementsByTagName('script')
    return scripts[scripts.length - 1]
  }()
  var shouldInjectCss = script.getAttribute("data-injectcss")

  /**
   * document ready
   */
  var ready = function(fn) {
    if (document.addEventListener) {
      if (~["complete", "loaded", "interactive"].indexOf(document.readyState)) {
        setTimeout(fn, 0)
      } else {
        var loadFn = function() {
          document.removeEventListener("DOMContentLoaded", loadFn, false)
          fn()
        }
        document.addEventListener("DOMContentLoaded", loadFn, false)
      }
    } else if (document.attachEvent) {
      IEContentLoaded(window, fn)
    }

    function IEContentLoaded(w, fn) {
      var d = w.document,
        done = false,
        // only fire once
        init = function() {
          if (!done) {
            done = true
            fn()
          }
        }
        // polling for no errors
      var polling = function() {
        try {
          // throws errors until after ondocumentready
          d.documentElement.doScroll('left')
        } catch (e) {
          setTimeout(polling, 50)
          return
        }
        // no errors, fire

        init()
      };

      polling()
        // trying to always fire before onload
      d.onreadystatechange = function() {
        if (d.readyState == 'complete') {
          d.onreadystatechange = null
          init()
        }
      }
    }
  }

  /**
   * Insert el before target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var before = function(el, target) {
    target.parentNode.insertBefore(el, target)
  }

  /**
   * Prepend el to target
   *
   * @param {Element} el
   * @param {Element} target
   */

  var prepend = function(el, target) {
    if (target.firstChild) {
      before(el, target.firstChild)
    } else {
      target.appendChild(el)
    }
  }

  function appendSvg() {
    var div, svg

    div = document.createElement('div')
    div.innerHTML = svgSprite
    svgSprite = null
    svg = div.getElementsByTagName('svg')[0]
    if (svg) {
      svg.setAttribute('aria-hidden', 'true')
      svg.style.position = 'absolute'
      svg.style.width = 0
      svg.style.height = 0
      svg.style.overflow = 'hidden'
      prepend(svg, document.body)
    }
  }

  if (shouldInjectCss && !window.__iconfont__svg__cssinject__) {
    window.__iconfont__svg__cssinject__ = true
    try {
      document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>");
    } catch (e) {
      console && console.log(e)
    }
  }

  ready(appendSvg)


})(window)