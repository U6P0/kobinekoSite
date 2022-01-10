@extends('layouts.app')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

    var Climed = "rgb(239,69,74)";
    var notClimed = "rgb(211, 211, 211)";

    var textClimed = "rgb(245,245,245)";
    var textNotClimed = "rgb(0,0,0)";

    for (var yamaId=1; yamaId<=100; yamaId++) {

    var yamaPath = "#" + yamaId;

    $(yamaPath).on("click", function() {
        var idname = $(this).attr("id");
        var currentColor = $("#path"+idname).css("fill");
        var trianglePath = "#path" + idname;
        var rectPath = "#rpath" + idname;

        var currentVal = Number( $('.countYama').html() );

        if( currentColor == notClimed ) 
        {
            $("#mountainid"+idname).val(1);
            $('.countYama').html(currentVal + 1);
            $(this).css({ fill: textClimed});
            $(rectPath).css({ fill: Climed });
            $(trianglePath).css({ fill: Climed });
        }
        else
        {
            $("#mountainid"+idname).val(0);
            $('.countYama').html(currentVal - 1);
            $(this).css({ fill: textNotClimed});
            $(rectPath).css({ fill: notClimed });
            $(trianglePath).css({ fill: notClimed });
        }
    });

    }

});
</script>


    <div class="container">
         
       <div class="row">
            <div class="col">       
        
        <form action="{{ url('register') }}" method="POST" class="form-horizontal">
            @csrf

            <div class="form-group">
                @for ($mountainIndex = 1; $mountainIndex <= 100; $mountainIndex++)
                
                    <input type="hidden" name="mountainnumber{{$mountainIndex}}" id="mountainid{{$mountainIndex}}" class="form-control">
                @endfor
                
                <!-- <div class="mountainClass{{$mountainIndex}}">0</div> -->                    
                <!-- 
                <div class="col-sm-6">
                    <input type="text" name="mountainnumber1" class="form-control">
                </div>
                -->
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </form>
        </div>
        </div>
        
       <div class="row">
            <div class="col">
                <div class="countYama">0</div>/100登頂
                
        </div>
        </div>
        <div class="row">
            <div class="col">
        
<svg
   width="253.20625mm"
   height="233.62709mm"
   viewBox="0 0 253.20625 233.62709"
   version="1.1"
   id="svg5"
   inkscape:version="1.1.1 (3bf5ae0d25, 2021-09-20)"
   sodipodi:docname="最新.svg"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:xlink="http://www.w3.org/1999/xlink"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:svg="http://www.w3.org/2000/svg">
  <sodipodi:namedview
     id="namedview7"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageshadow="2"
     inkscape:pageopacity="0.0"
     inkscape:pagecheckerboard="0"
     inkscape:document-units="mm"
     showgrid="false"
     inkscape:zoom="1.4823794"
     inkscape:cx="300.53035"
     inkscape:cy="525.1692"
     inkscape:window-width="1920"
     inkscape:window-height="1017"
     inkscape:window-x="-8"
     inkscape:window-y="-8"
     inkscape:window-maximized="1"
     inkscape:current-layer="layer2"
     inkscape:snap-text-baseline="false"
     inkscape:snap-object-midpoints="false" />
  <defs
     id="defs2" />
  <g
     inkscape:label="Layer 1"
     inkscape:groupmode="layer"
     id="layer1"
     transform="translate(70.558655,-3.8427048)">
    <image
       width="253.20625"
       height="233.62709"
       preserveAspectRatio="none"
       id="image17"
       x="-70.558655"
       y="3.8427048"
       sodipodi:insensitive="true" />
  </g>
  <g
     inkscape:groupmode="layer"
     id="layer2"
     inkscape:label="山と名前">
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-rule:evenodd;fill-opacity:1;stroke:#939393;stroke-opacity:1;stroke-width:2.5133858;stroke-miterlimit:4;stroke-dasharray:none;stroke-linejoin:round;stroke-linecap:round;paint-order:normal;stroke-dashoffset:0"
       id="path1"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z"
       transform="matrix(0.26458333,0,0,0.26458333,138.32436,28.144465)"
       inkscape:transform-center-y="-0.8227784" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path2"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,141.35336,36.792144)"
       inkscape:transform-center-y="-0.8227784"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path3"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,148.79966,44.743271)"
       inkscape:transform-center-y="-0.8227784"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path4"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,140.09128,49.665396)"
       inkscape:transform-center-y="-0.8227784"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path5"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,140.46991,58.878607)"
       inkscape:transform-center-y="-0.8227784"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path6"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,131.13049,61.907607)"
       inkscape:transform-center-y="-0.8227784"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path7"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,129.86841,41.714269)"
       inkscape:transform-center-y="13.691183"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z"
       inkscape:transform-center-x="-13.378086" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path8"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,122.80074,46.888812)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path9"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,131.13049,74.654652)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path10"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,151.45003,71.625652)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path11"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,175.68204,29.976891)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path12"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,177.44896,50.17023)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path13"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,176.31309,57.995148)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path14"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,168.66304,57.718398)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path15"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,161.4205,62.412441)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path16"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,192.72017,69.353901)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path17"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,177.70137,72.50911)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path18"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,162.80879,72.887735)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path19"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,183.63317,77.305028)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path20"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,174.16754,86.770654)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path21"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,168.61437,89.673447)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path22"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,158.26528,98.886653)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path23"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,152.96454,107.72124)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path24"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,143.75133,98.381821)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path25"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,188.93392,91.187947)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path26"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,175.55583,94.84799)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path27"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,4.4173,7.00697)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path28"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,11.989797,15.084305)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path29"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,0.63104517,22.025765)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path30"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,5.8055877,24.676141)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path31"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,6.3104211,33.510727)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path32"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,-7.6987075,37.928019)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path33"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,5.6793795,42.597728)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path34"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,4.7715875,48.505187)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path35"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,3.155212,56.228232)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path36"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,4.164879,62.766733)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path37"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,6.1842127,75.53811)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path38"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,9.4656301,114.91512)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path39"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,19.057466,41.840478)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path40"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,36.221803,47.015021)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path41"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,30.29001,47.646063)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path42"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,33.697635,71.521097)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path43"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,32.309344,81.974737)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path44"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,36.600428,102.5467)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path45"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,44.299138,121.22554)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path46"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,29.406551,129.55529)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path47"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,26.251342,140.66162)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path48"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,16.280882,144.57408)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path49"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,35.716969,158.457)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path50"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,46.823305,160.72875)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path51"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,58.939308,173.85442)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path52"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,50.483348,178.65034)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path53"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,70.298061,171.83509)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path54"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,113.71374,129.93392)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path55"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,130.24703,80.838862)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path56"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,117.6262,66.072483)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path57"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,117.6262,81.644779)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path58"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,111.44199,76.547777)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path59"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,106.51986,72.004277)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path60"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,97.30665,76.926403)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path61"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,90.743815,78.69332)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path62"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,103.74328,86.39203)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path63"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,105.00596,90.270363)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path64"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,95.034899,90.809322)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path65"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,85.316856,93.459698)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path66"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,69.667019,89.294822)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path67"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,109.29644,95.60524)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path68"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,81.025771,108.85712)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path69"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,70.550477,117.43929)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path70"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,70.550477,135.7395)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path71"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,60.3276,133.97258)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path72"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,61.463475,148.73896)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path73"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,34.076261,-31.48658)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path74"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,31.755242,-26.020746)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path75"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,28.905056,-22.67158)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path76"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,67.900102,-17.477452)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path77"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,88.85069,-14.322243)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path78"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,82.918897,-10.914617)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path79"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,90.491399,-4.9828243)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path80"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,101.47153,-4.9828243)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path81"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,113.33511,-14.448451)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path82"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,112.70407,-8.5166584)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path83"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,120.40278,-11.924284)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path84"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,126.10315,-11.924284)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path85"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,134.2857,-2.9634905)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path86"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,149.80933,2.7158858)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path87"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,161.4205,-0.4393232)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path88"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,136.80987,17.103639)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path89"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,108.53919,3.094511)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path90"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,109.67507,8.5214704)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path91"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,99.325984,18.744347)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path92"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,65.249726,14.958097)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path93"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,70.676686,13.366056)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path94"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,74.789557,14.42439)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path95"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,72.569811,21.268515)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path96"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,74.96777,28.714808)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path97"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,84.307189,30.986559)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path98"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,84.054772,40.452186)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path99"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,92.384524,42.850145)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <path
       sodipodi:type="star"
       style="fill:#d3d3d3;fill-opacity:1;fill-rule:evenodd;stroke:#939393;stroke-width:2.51339;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="path100"
       inkscape:flatsided="false"
       sodipodi:sides="3"
       sodipodi:cx="133.56223"
       sodipodi:cy="167.90681"
       sodipodi:r1="12.438846"
       sodipodi:r2="6.2194233"
       sodipodi:arg1="0.52359878"
       sodipodi:arg2="1.5707963"
       inkscape:rounded="0"
       inkscape:randomized="0"
       transform="matrix(0.26458333,0,0,0.26458333,91.248649,50.17023)"
       inkscape:transform-center-y="13.691183"
       inkscape:transform-center-x="-13.378086"
       d="m 144.33458,174.12624 -10.77235,0 -10.77236,0 5.38618,-9.32914 5.38618,-9.32913 5.38617,9.32913 z" />
    <text
       xml:space="preserve"
       style="font-size:6.35px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:none;stroke-width:0.264583"
       x="156.56146"
       y="68.972862"
       id="text6636"><tspan
         sodipodi:role="line"
         id="tspan6634"
         style="stroke-width:0.264583"
         x="156.56146"
         y="68.972862" /></text>
    <text
       xml:space="preserve"
       style="font-size:6.35px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:none;stroke-width:0.264583"
       x="180.60417"
       y="66.322495"
       id="text16786"><tspan
         sodipodi:role="line"
         id="tspan16784"
         style="stroke-width:0.264583"
         x="180.60417"
         y="66.322495" /></text>
    <text
       xml:space="preserve"
       style="font-size:4.23333px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:none;stroke-width:0.264583"
       x="167.73091"
       y="67.01664"
       id="text24404"><tspan
         sodipodi:role="line"
         id="tspan24402"
         style="stroke-width:0.264583" /></text>
    <text
       xml:space="preserve"
       style="font-size:3.52777px;line-height:1.25;font-family:sans-serif;-inkscape-font-specification:'sans-serif, Normal';font-variant-ligatures:none;white-space:pre;shape-inside:url(#rect3896);stroke-width:0.264583"
       x="164.95432"
       y="68.972862"
       id="text28074" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.665;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath2"
       width="21.077"
       height="4.5435009"
       x="180.07104"
       y="77.261208"
       ry="1.388292" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.665;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath3"
       width="21.077"
       height="4.5435009"
       x="189.00838"
       y="84.650726"
       ry="1.388292" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.665;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath4"
       width="21.077"
       height="4.5435009"
       x="179.33812"
       y="92.251129"
       ry="1.388292" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.665;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath7"
       width="21.077"
       height="4.5435009"
       x="140.22125"
       y="81.654167"
       ry="1.388292" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.665;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath8"
       width="21.077"
       height="4.5435009"
       x="132.60693"
       y="87.684982"
       ry="1.388292" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.620285;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath9"
       width="18.477062"
       height="4.5092659"
       x="162.57744"
       y="110.1123"
       ry="1.3778312" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.553134;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath10"
       width="14.615176"
       height="4.5332861"
       x="177.76787"
       y="105.56381"
       ry="1.3851708" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.620285;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath11"
       width="18.477062"
       height="4.5092659"
       x="216.36723"
       y="67.354744"
       ry="1.3778312" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.620285;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath12"
       width="18.477062"
       height="4.5092659"
       x="218.50906"
       y="87.702103"
       ry="1.3778312" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.53963;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath13"
       width="13.738607"
       height="4.589921"
       x="216.16664"
       y="97.828629"
       ry="1.4024758" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.580111;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath14"
       width="16.018438"
       height="4.5494399"
       x="204.5882"
       y="105.14461"
       ry="1.3901066" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.580111;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath15"
       width="16.018438"
       height="4.5494399"
       x="196.03049"
       y="109.47253"
       ry="1.3901066" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.580111;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath16"
       width="16.018438"
       height="4.5494399"
       x="232.76782"
       y="107.49391"
       ry="1.3901066" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.580111;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath20"
       width="16.018438"
       height="4.5494399"
       x="213.68875"
       y="126.05012"
       ry="1.3901066" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.580111;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath23"
       width="16.018438"
       height="4.5494399"
       x="191.0022"
       y="153.72168"
       ry="1.3901066" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.580111;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath25"
       width="16.018438"
       height="4.5494399"
       x="231.18665"
       y="133.01735"
       ry="1.3901066" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.580111;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath26"
       width="16.018438"
       height="4.5494399"
       x="218.69266"
       y="140.71112"
       ry="1.3901066" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.580111;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath27"
       width="16.018438"
       height="4.5494399"
       x="17.871187"
       y="43.239101"
       ry="1.3901066" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.580111;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath28"
       width="16.018438"
       height="4.5494399"
       x="51.426476"
       y="53.412781"
       ry="1.3901066" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.580111;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath29"
       width="16.018438"
       height="4.5494399"
       x="10.017823"
       y="58.767345"
       ry="1.3901066" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.667772;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath30"
       width="21.642317"
       height="4.4617791"
       x="8.4552841"
       y="67.206299"
       ry="1.3633214" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.667772;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath31"
       width="21.642317"
       height="4.4617791"
       x="12.707485"
       y="72.814819"
       ry="1.3633214" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.594828;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath32"
       width="16.896151"
       height="4.5347228"
       x="6.3057942"
       y="78.405861"
       ry="1.3856097" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.594828;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath33"
       width="16.896151"
       height="4.5347228"
       x="6.3057942"
       y="83.998917"
       ry="1.3856097" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.473205;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath34"
       width="10.413807"
       height="4.6563454"
       x="12.788136"
       y="89.591972"
       ry="1.4227723" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.473205;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath37"
       width="10.413807"
       height="4.6563454"
       x="18.710163"
       y="115.29382"
       ry="1.4227723" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.571066;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath35"
       width="15.492027"
       height="4.5584846"
       x="9.5092964"
       y="95.747078"
       ry="1.3928703" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.571066;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath36"
       width="15.492027"
       height="4.5584846"
       x="9.6048298"
       y="102.34476"
       ry="1.3928703" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.571066;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath38"
       width="15.492027"
       height="4.5584846"
       x="20.633192"
       y="153.71715"
       ry="1.3928703" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.571066;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath39"
       width="15.492027"
       height="4.5584846"
       x="52.56953"
       y="73.232735"
       ry="1.3928703" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.571066;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath40"
       width="15.492027"
       height="4.5584846"
       x="75.459709"
       y="87.307938"
       ry="1.3928703" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.571066;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath42"
       width="15.492027"
       height="4.5584846"
       x="74.178864"
       y="111.59455"
       ry="1.3928703" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.571066;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath43"
       width="15.492027"
       height="4.5584846"
       x="73.796738"
       y="121.58346"
       ry="1.3928703" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.601064;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath44"
       width="17.162371"
       height="4.5584846"
       x="77.111412"
       y="141.75232"
       ry="1.3928703" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.601064;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath45"
       width="17.162371"
       height="4.5584846"
       x="82.981918"
       y="161.03506"
       ry="1.3928703" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.601064;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath46"
       width="17.162371"
       height="4.5584846"
       x="69.423302"
       y="170.66069"
       ry="1.3928703" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.601064;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath47"
       width="17.162371"
       height="4.5584846"
       x="65.841011"
       y="181.02544"
       ry="1.3928703" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.512767;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath48"
       width="12.253071"
       height="4.646781"
       x="27.588369"
       y="185.08647"
       ry="1.4198499" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.577439;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath49"
       width="15.75811"
       height="4.582109"
       x="44.060249"
       y="198.6837"
       ry="1.4000889" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.577439;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath50"
       width="15.75811"
       height="4.582109"
       x="50.842701"
       y="209.39284"
       ry="1.4000889" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.577439;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath51"
       width="15.75811"
       height="4.582109"
       x="101.8707"
       y="222.95775"
       ry="1.4000889" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.577439;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath53"
       width="15.75811"
       height="4.582109"
       x="111.92249"
       y="212.06383"
       ry="1.4000889" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.577439;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath54"
       width="15.75811"
       height="4.582109"
       x="141.33488"
       y="180.47818"
       ry="1.4000889" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.645278;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath55"
       width="19.973925"
       height="4.5142698"
       x="159.75282"
       y="129.10826"
       ry="1.3793603" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.645278;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath56"
       width="19.973925"
       height="4.5142698"
       x="129.21919"
       y="105.71406"
       ry="1.3793603" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.519655;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath57"
       width="12.603154"
       height="4.6398931"
       x="149.80241"
       y="115.71107"
       ry="1.4177451" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.647922;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath58"
       width="20.149767"
       height="4.5116258"
       x="147.74297"
       y="134.74498"
       ry="1.3785523" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.558948;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath59"
       width="14.705688"
       height="4.6006002"
       x="123.244"
       y="110.82874"
       ry="1.4057389" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.595712;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath60"
       width="16.703798"
       height="4.6006002"
       x="110.52845"
       y="115.13064"
       ry="1.4057389" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.581791;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath61"
       width="15.932213"
       height="4.6006002"
       x="101.3363"
       y="120.49149"
       ry="1.4057389" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.581791;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath62"
       width="15.932213"
       height="4.6006002"
       x="117.79768"
       y="125.62125"
       ry="1.4057389" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.620838;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath63"
       width="18.142565"
       height="4.6006002"
       x="120.97269"
       y="141.91605"
       ry="1.4057389" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.505513;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath64"
       width="11.723858"
       height="4.7201009"
       x="113.69385"
       y="130.40298"
       ry="1.442253" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.636071;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath65"
       width="19.089693"
       height="4.5895429"
       x="96.196968"
       y="138.0768"
       ry="1.4023603" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.636071;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath66"
       width="19.089693"
       height="4.5895429"
       x="80.405594"
       y="129.77826"
       ry="1.4023603" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.636071;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath67"
       width="19.089693"
       height="4.5895429"
       x="141.98941"
       y="144.0634"
       ry="1.4023603" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.578203;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath68"
       width="15.577849"
       height="4.6474104"
       x="115.53204"
       y="156.70694"
       ry="1.420042" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.610863;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath69"
       width="17.387392"
       height="4.6474104"
       x="109.76435"
       y="164.20334"
       ry="1.420042" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.610863;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath70"
       width="17.387392"
       height="4.6474104"
       x="111.38483"
       y="176.63382"
       ry="1.420042" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.610863;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath71"
       width="17.387392"
       height="4.6474104"
       x="99.080147"
       y="170.44403"
       ry="1.420042" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.610863;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath72"
       width="17.387392"
       height="4.6474104"
       x="102.85979"
       y="189.3698"
       ry="1.420042" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.668625;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath52"
       width="21.556948"
       height="4.4909229"
       x="50.531322"
       y="219.25513"
       ry="1.3722265" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.64109;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath41"
       width="19.524223"
       height="4.5584846"
       x="62.242989"
       y="81.226852"
       ry="1.3928703" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.580111;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath24"
       width="16.018438"
       height="4.5494399"
       x="168.03806"
       y="145.51105"
       ry="1.3901066" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.580111;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath21"
       width="16.018438"
       height="4.5494399"
       x="184.53894"
       y="129.43504"
       ry="1.3901066" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.618411;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath22"
       width="18.203409"
       height="4.5494399"
       x="195.93146"
       y="145.71501"
       ry="1.3901066" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.580111;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath17"
       width="16.018438"
       height="4.5494399"
       x="199.35324"
       y="119.63093"
       ry="1.3901066" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.580111;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath18"
       width="16.018438"
       height="4.5494399"
       x="179.2785"
       y="120.01697"
       ry="1.3901066" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.667772;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath19"
       width="21.642317"
       height="4.4617791"
       x="226.05438"
       y="117.72399"
       ry="1.3633214" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.75202;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath6"
       width="27.236444"
       height="4.4964066"
       x="134.62798"
       y="98.780922"
       ry="1.373902" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.599054;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath5"
       width="16.859291"
       height="4.609447"
       x="154.66182"
       y="94.148796"
       ry="1.4084421" />
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath2);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="2"
       transform="translate(3.0378487)"><tspan
         x="180.65224"
         y="80.806714"
         id="tspan15742">小金沢山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath26);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="26"
       transform="translate(0.77843779)"><tspan
         x="219.27184"
         y="144.25593"
         id="tspan15744">鳥ノ胸山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath25);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="25"
       transform="translate(2.251357)"><tspan
         x="231.76654"
         y="136.56257"
         id="tspan15746">大室山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath24);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="24"
       transform="translate(2.2900091)"><tspan
         x="168.61633"
         y="149.05671"
         id="tspan15748">杓子山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath23);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="23"
       transform="translate(2.2883476)"><tspan
         x="191.58041"
         y="157.26765"
         id="tspan15750">石割山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath22);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="22"
       transform="translate(1.6199506)"><tspan
         x="196.51012"
         y="149.25984"
         id="tspan15752">御正体山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath21);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="21"
       transform="translate(2.2744977)"><tspan
         x="185.11809"
         y="132.98054"
         id="tspan15754">今倉山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath20);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="20"
       transform="translate(2.2624247)"><tspan
         x="214.26791"
         y="129.59578"
         id="tspan15756">菜畑山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath19);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="19"
       transform="translate(1.4938968)"><tspan
         x="226.67935"
         y="121.2696"
         id="tspan15758">二十六夜山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath18);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="18"
       transform="translate(2.2605953)"><tspan
         x="179.85777"
         y="123.56257"
         id="tspan15760">九鬼山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath17);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="17"
       transform="translate(2.2766323)"><tspan
         x="199.93198"
         y="123.17585"
         id="tspan15762">倉岳山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath16);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="16"
       transform="translate(2.2188813)"><tspan
         x="233.3466"
         y="111.03914"
         id="tspan15764">高柄山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath11);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="11"
       transform="translate(3.4379901)"><tspan
         x="216.96655"
         y="70.900464"
         id="tspan15766">三頭山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath12);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="12"
       transform="translate(3.4906566)"><tspan
         x="219.10912"
         y="91.246167"
         id="tspan15768">権現山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath13);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="13"
       transform="translate(2.9046319)"><tspan
         x="216.72412"
         y="101.37312"
         id="tspan15770">扇山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath14);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="14"
       transform="translate(2.2462063)"><tspan
         x="205.16635"
         y="108.68953"
         id="tspan15772">百蔵山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath15);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="15"
       transform="translate(2.277302)"><tspan
         x="196.61028"
         y="113.01765"
         id="tspan15774">岩殿山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath10);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="10"
       transform="translate(1.310393)"><tspan
         x="178.35483"
         y="109.10945"
         id="tspan15776">高川山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath9);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="9"
       transform="translate(1.8223729)"><tspan
         x="163.17749"
         y="113.65632"
         id="tspan15778">本社ヶ丸</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath8);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="8"
       transform="translate(3.0497624)"><tspan
         x="133.18741"
         y="91.230542"
         id="tspan15780">棚横手山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath7);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="7"
       transform="translate(2.9136187)"><tspan
         x="140.80351"
         y="85.199292"
         id="tspan15782">源次郎岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath6);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="6"
       transform="translate(1.0290826)"><tspan
         x="135.23424"
         y="102.32625"
         id="tspan15784">笹子雁ヶ腹摺山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath5);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="5"
       transform="translate(2.7273473)"><tspan
         x="155.21027"
         y="97.693433"
         id="tspan15786">滝子山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath4);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="4"
       transform="translate(2.8831622)"><tspan
         x="179.91983"
         y="95.796949"
         id="tspan15788">大蔵高丸</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath3);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="3"
       transform="translate(1.4501655)"><tspan
         x="189.58975"
         y="88.195386"
         id="tspan15790">雁ヶ腹摺山</tspan></text>
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.665;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath1"
       width="21.077"
       height="4.5435009"
       x="178.01678"
       y="68.37606"
       ry="1.388292" />
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath1);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="1"
       transform="translate(2.8763416)"><tspan
         x="178.59756"
         y="71.921949"
         id="tspan15792">大菩薩嶺</tspan></text>
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.610863;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath73"
       width="17.387392"
       height="4.6474104"
       x="48.421688"
       y="5.5296569"
       ry="1.420042" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.610863;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath74"
       width="17.387392"
       height="4.6474104"
       x="45.92289"
       y="11.413394"
       ry="1.420042" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.610863;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath75"
       width="17.387392"
       height="4.6474104"
       x="42.218719"
       y="17.648306"
       ry="1.420042" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.610863;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath76"
       width="17.387392"
       height="4.6474104"
       x="94.29248"
       y="16.774252"
       ry="1.420042" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.610863;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath77"
       width="17.387392"
       height="4.6474104"
       x="116.24621"
       y="19.27305"
       ry="1.420042" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.610863;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath78"
       width="17.387392"
       height="4.6474104"
       x="95.491562"
       y="32.480984"
       ry="1.420042" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.610863;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath79"
       width="17.387392"
       height="4.6474104"
       x="103.57373"
       y="38.906464"
       ry="1.420042" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.633518;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath80"
       width="18.792622"
       height="4.6247549"
       x="118.05496"
       y="44.444553"
       ry="1.4131196" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.633518;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath81"
       width="18.792622"
       height="4.6247549"
       x="142.28494"
       y="15.351403"
       ry="1.4131196" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.633518;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath82"
       width="18.792622"
       height="4.6247549"
       x="142.6671"
       y="38.733017"
       ry="1.4131196" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.633518;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath83"
       width="18.792622"
       height="4.6247549"
       x="151.48216"
       y="20.533775"
       ry="1.4131196" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.633518;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath84"
       width="18.792622"
       height="4.6247549"
       x="162.33739"
       y="25.158531"
       ry="1.4131196" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.633518;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath85"
       width="18.792622"
       height="4.6247549"
       x="166.75006"
       y="32.49231"
       ry="1.4131196" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.633518;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath86"
       width="18.792622"
       height="4.6247549"
       x="189.43661"
       y="29.993511"
       ry="1.4131196" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.555875;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath87"
       width="14.229639"
       height="4.7023973"
       x="199.01714"
       y="36.220554"
       ry="1.4368436" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.703662;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath88"
       width="23.541586"
       height="4.5546103"
       x="177.34727"
       y="57.515366"
       ry="1.3916864" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.60796;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath89"
       width="17.211809"
       height="4.6503124"
       x="148.4425"
       y="44.788746"
       ry="1.4209288" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.60796;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath90"
       width="17.211809"
       height="4.6503124"
       x="149.90189"
       y="50.882412"
       ry="1.4209288" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.60796;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath91"
       width="17.211809"
       height="4.6503124"
       x="139.70302"
       y="58.895397"
       ry="1.4209288" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.60796;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath92"
       width="17.211809"
       height="4.6503124"
       x="78.673538"
       y="54.611744"
       ry="1.4209288" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.563287;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath93"
       width="14.775288"
       height="4.6503124"
       x="91.06752"
       y="48.536942"
       ry="1.4209288" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.59972;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath94"
       width="16.880682"
       height="4.6138792"
       x="110.80689"
       y="51.079113"
       ry="1.4097965" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.63645;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath95"
       width="19.164265"
       height="4.5771494"
       x="83.400925"
       y="62.634861"
       ry="1.3985735" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.63645;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath96"
       width="19.164265"
       height="4.5771494"
       x="83.765823"
       y="69.462624"
       ry="1.3985735" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.63645;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath97"
       width="19.164265"
       height="4.5771494"
       x="95.90284"
       y="77.137505"
       ry="1.3985735" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.63645;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath98"
       width="19.164265"
       height="4.5771494"
       x="95.188904"
       y="83.206017"
       ry="1.3985735" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.513481;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath99"
       width="12.147811"
       height="4.7001185"
       x="111.05982"
       y="88.366005"
       ry="1.4361475" />
    <rect
       style="fill:#d3d3d3;fill-opacity:1;stroke:#939393;stroke-width:0.678441;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;paint-order:normal"
       id="rpath100"
       width="21.978045"
       height="4.5351586"
       x="100.01239"
       y="95.213516"
       ry="1.3857431" />
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath53);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="53"
       transform="translate(1.998003)"><tspan
         x="112.48433"
         y="215.60945"
         id="tspan15794">白鳥山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath62);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="62"
       transform="translate(0.61568136)"><tspan
         x="118.34923"
         y="129.16609"
         id="tspan15796">節刀ヶ岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath64);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="64"
       transform="translate(1.8135138)"><tspan
         x="114.18349"
         y="133.94734"
         id="tspan15798">王岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath63);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="63"
       transform="translate(1.7128168)"><tspan
         x="121.52366"
         y="145.46101"
         id="tspan15800">十二ヶ岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath68);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="68"
       transform="translate(2.2232087)"><tspan
         x="116.05932"
         y="160.25203"
         id="tspan15802">竜ヶ岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath65);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="65"
       transform="translate(2.0213446)"><tspan
         x="96.755363"
         y="141.62117"
         id="tspan15804">三方分山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath69);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="69"
       transform="translate(2.9893218)"><tspan
         x="110.29248"
         y="167.74812"
         id="tspan15806">毛無山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath70);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="70"
       transform="translate(1.3585535)"><tspan
         x="111.91248"
         y="180.17976"
         id="tspan15808">長者ヶ岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath71);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="71"
       transform="translate(2.9637422)"><tspan
         x="99.608879"
         y="173.98835"
         id="tspan15810">三石山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath72);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="72"
       transform="translate(2.9856173)"><tspan
         x="103.38818"
         y="192.91414"
         id="tspan15812">思親山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath66);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="66"
       transform="translate(3.9665996)"><tspan
         x="80.964348"
         y="133.32234"
         id="tspan15814">蛾ヶ岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath61);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="61"
       transform="translate(2.2602758)"><tspan
         x="101.88828"
         y="124.03718"
         id="tspan15816">滝戸山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath60);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="60"
       transform="translate(2.6461906)"><tspan
         x="111.08031"
         y="118.67585"
         id="tspan15818">春日山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath59);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="59"
       transform="translate(1.62228)"><tspan
         x="123.7966"
         y="114.37312"
         id="tspan15820">大栃山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath57);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="57"
       transform="translate(2.2438608)"><tspan
         x="150.33322"
         y="119.25593"
         id="tspan15822">黒岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath67);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="67"
       transform="translate(2.0608648)"><tspan
         x="142.54704"
         y="147.6075"
         id="tspan15824">足和田山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath56);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="56"
       transform="translate(4.2262637)"><tspan
         x="129.8157"
         y="109.25984"
         id="tspan15826">達沢山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath58);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="58"
       transform="translate(2.6924302)"><tspan
         x="148.34204"
         y="138.28914"
         id="tspan15828">釈迦ヶ岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath55);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="55"
       transform="translate(2.5302429)"><tspan
         x="160.35037"
         y="132.65242"
         id="tspan15830">三ツ峠山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath54);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="54"
       transform="translate(2.0895801)"><tspan
         x="141.89644"
         y="184.02351"
         id="tspan15832">富士山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath51);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="51"
       transform="translate(2.2740527)"><tspan
         x="102.43209"
         y="226.50203"
         id="tspan15834">貫ヶ岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath52);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="52"
       transform="translate(0.6499822)"><tspan
         x="51.140175"
         y="222.80085"
         id="tspan15836">高ドッキョウ</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath50);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="50"
       transform="translate(2.1834588)"><tspan
         x="51.404255"
         y="212.93757"
         id="tspan15838">篠井山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath49);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="49"
       transform="translate(2.1437305)"><tspan
         x="44.621052"
         y="202.22859"
         id="tspan15840">十枚山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath48);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="48"
       transform="translate(1.9288322)"><tspan
         x="28.117054"
         y="188.63093"
         id="tspan15842">山伏</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath47);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="47"
       transform="translate(2.6921267)"><tspan
         x="66.414299"
         y="184.57039"
         id="tspan15844">八紘嶺</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath46);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="46"
       transform="translate(2.8327268)"><tspan
         x="69.997238"
         y="174.20515"
         id="tspan15846">七面山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath45);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="45"
       transform="translate(2.8077728)"><tspan
         x="83.555832"
         y="164.58015"
         id="tspan15848">身延山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath44);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="44"
       transform="translate(1.0160456)"><tspan
         x="77.684746"
         y="145.29695"
         id="tspan15850">富士見山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath43);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="43"
       transform="translate(2.0099944)"><tspan
         x="74.370293"
         y="125.12898"
         id="tspan15852">源氏山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath42);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="42"
       transform="translate(2.0256795)"><tspan
         x="74.753098"
         y="115.13875"
         id="tspan15854">櫛形山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath41);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="41"
       transform="translate(2.2498787)"><tspan
         x="62.816814"
         y="84.771558"
         id="tspan15856">千頭星山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath40);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="40"
       transform="translate(1.9975856)"><tspan
         x="76.033615"
         y="90.853589"
         id="tspan15858">甘利山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath39);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="39"
       transform="translate(2.01797)"><tspan
         x="53.143723"
         y="76.777417"
         id="tspan15860">鳳凰山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath38);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="38"
       transform="translate(2.138493)"><tspan
         x="21.207439"
         y="157.26179"
         id="tspan15862">笊ヶ岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath37);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="37"
       transform="translate(1.2747324)"><tspan
         x="19.231697"
         y="118.83796"
         id="tspan15864">笹山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath36);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="36"
       transform="translate(1.8920507)"><tspan
         x="10.178334"
         y="105.8907"
         id="tspan15866">農鳥岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath35);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="35"
       transform="translate(2.0756713)"><tspan
         x="10.082631"
         y="99.293042"
         id="tspan15868">間ノ岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath34);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="34"
       transform="translate(1.1730424)"><tspan
         x="13.310591"
         y="93.136792"
         id="tspan15870">北岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath33);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="33"
       transform="translate(0.94278311)"><tspan
         x="6.8916273"
         y="87.543042"
         id="tspan15872">小太郎山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath32);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="32"
       transform="translate(1.0719736)"><tspan
         x="6.8916278"
         y="81.951245"
         id="tspan15874">仙丈ヶ岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath31);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="31"
       transform="translate(3.4091093)"><tspan
         x="13.330989"
         y="76.359449"
         id="tspan15876">アサヨ峰</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath30);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="30"
       transform="translate(1.5107828)"><tspan
         x="9.0797319"
         y="70.752027"
         id="tspan15878">甲斐駒ヶ岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath29);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="29"
       transform="translate(3.9259176)"><tspan
         x="10.596609"
         y="62.312574"
         id="tspan15880">鋸岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath28);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="28"
       transform="translate(2.0839409)"><tspan
         x="52.004116"
         y="56.957105"
         id="tspan15882">日向山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath27);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="27"
       transform="translate(2.1409393)"><tspan
         x="18.448673"
         y="46.783277"
         id="tspan15884">雨乞岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath73);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="73"
       transform="translate(4.6345849)"><tspan
         x="48.948723"
         y="9.0742924"
         id="tspan15886">赤岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath74);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="74"
       transform="translate(2.902544)"><tspan
         x="46.449947"
         y="14.959058"
         id="tspan15888">権現岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath75);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="75"
       transform="translate(3.0132064)"><tspan
         x="42.745358"
         y="21.193433"
         id="tspan15890">編笠山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath77);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="77"
       transform="translate(3.0101678)"><tspan
         x="116.77416"
         y="22.818433"
         id="tspan15892">小川山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath76);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="76"
       transform="translate(3.0202598)"><tspan
         x="94.819817"
         y="20.318433"
         id="tspan15894">横尾山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath80);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="80"
       transform="translate(1.9835046)"><tspan
         x="118.59482"
         y="47.990308"
         id="tspan15896">国師ヶ岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath79);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="79"
       transform="translate(3.0159534)"><tspan
         x="104.10107"
         y="42.451245"
         id="tspan15898">金峰山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath89);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="89"
       transform="translate(2.9062208)"><tspan
         x="148.96767"
         y="48.334058"
         id="tspan15900">黒金山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath90);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="90"
       transform="translate(2.9095743)"><tspan
         x="150.42714"
         y="54.427808"
         id="tspan15902">乾徳山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath100);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="100"
       transform="translate(1.6970195)"><tspan
         x="100.59866"
         y="98.757886"
         id="tspan15904">大蔵経寺山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath99);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="99"
       transform="translate(2.1543047)"><tspan
         x="111.56017"
         y="91.91023"
         id="tspan15906">兜山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath98);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="98"
       transform="translate(3.8431495)"><tspan
         x="95.753365"
         y="86.750074"
         id="tspan15908">要害山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath97);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="97"
       transform="translate(3.8300015)"><tspan
         x="96.467529"
         y="80.681714"
         id="tspan15910">帯那山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath96);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="96"
       transform="translate(2.0937925)"><tspan
         x="84.329536"
         y="73.007886"
         id="tspan15912">羅漢寺山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath95);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="95"
       transform="translate(2.0808039)"><tspan
         x="83.965569"
         y="66.179761"
         id="tspan15914">太刀岡山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath92);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="92"
       transform="translate(3.049276)"><tspan
         x="79.198616"
         y="58.156324"
         id="tspan15916">茅ヶ岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath94);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="94"
       transform="translate(2.6046872)"><tspan
         x="111.35089"
         y="54.625074"
         id="tspan15918">黒富士</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath93);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="93"
       transform="translate(3.2535304)"><tspan
         x="91.593765"
         y="52.082105"
         id="tspan15920">曲岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath91);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="91"
       transform="translate(2.923948)"><tspan
         x="140.2294"
         y="62.439527"
         id="tspan15922">小楢山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath88);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="88"
       transform="translate(2.4934429)"><tspan
         x="177.92233"
         y="61.06062"
         id="tspan15924">黒川鶏冠山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath78);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="78"
       transform="translate(3.027005)"><tspan
         x="96.019043"
         y="36.025464"
         id="tspan15926">瑞牆山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath87);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="87"
       transform="translate(1.43789)"><tspan
         x="199.5161"
         y="39.765699"
         id="tspan15928">雲取山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath81);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="81"
       transform="translate(0.17159519)"><tspan
         x="142.82373"
         y="18.896558"
         id="tspan15930">甲武信ヶ岳</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath82);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="82"
       transform="translate(3.6943873)"><tspan
         x="143.20656"
         y="42.277417"
         id="tspan15932">鶏冠山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath86);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="86"
       transform="translate(3.6474141)"><tspan
         x="189.97568"
         y="33.539136"
         id="tspan15934">飛龍山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath85);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="85"
       transform="translate(3.6822227)"><tspan
         x="167.28963"
         y="36.037183"
         id="tspan15936">笠取山</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath84);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="84"
       transform="translate(3.5604104)"><tspan
         x="162.87646"
         y="28.703199"
         id="tspan15938">雁坂嶺</tspan></text>
    <text
       xml:space="preserve"
       style="font-style:normal;font-variant:normal;font-weight:bold;font-stretch:normal;font-size:3.52777px;line-height:1.25;font-family:'BIZ UDPゴシック';-inkscape-font-specification:'BIZ UDPゴシック, Bold';font-variant-ligatures:none;font-variant-caps:normal;font-variant-numeric:normal;font-variant-east-asian:normal;white-space:pre;shape-inside:url(#rpath83);stroke-width:0.264583"
       x="156.37216"
       y="74.715355"
       id="83"
       transform="translate(3.718252)"><tspan
         x="152.02101"
         y="24.078199"
         id="tspan15940">破風山</tspan></text>
  </g>
</svg>
    </div> 
        </div>
    </div>

@endsection