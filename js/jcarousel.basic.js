.jcarousel-wrapper {
    margin: 20px auto;
    position: relative;
    border: 10px solid #fff;
    width: 600px;
    height: 400px;
    -webkit-border-radius: 5px;
       -moz-border-radius: 5px;
            border-radius: 5px;
    -webkit-box-shadow: 0 0 2px #999;
       -moz-box-shadow: 0 0 2px #999;
            box-shadow: 0 0 2px #999;
}


.jcarousel-wrapper .photo-credits {
    position: absolute;
    right: 15px;
    bottom: 0;
    font-size: 13px;
    color: #fff;
    text-shadow: 0 0 1px rgba(0, 0, 0, 0.85);
    opacity: .66;
}

.jcarousel-wrapper .photo-credits a {
    color: #fff;
}

/** Carousel **/

.jcarousel {
    position: relative;
    overflow: hidden;
}

.jcarousel ul {
    width: 10000em;
    position: relative;
    list-style: none;
    margin: 0;
    padding: 0;
}

.jcarousel li {
    float: left;
}

/** Carousel Controls **/

.jcarousel-control-prev,
.jcarousel-control-next {
    position: absolute;
    top: 200px;
    width: 30px;
    height: 30px;
    text-align: center;
    background: #4E443C;
    color: #fff;
    text-decoration: none;
    text-shadow: 0 0 1px #000;
    font: 24px/27px Arial, sans-serif;
    -webkit-border-radius: 30px;
       -moz-border-radius: 30px;
            border-radius: 30px;
    -webkit-box-shadow: 0 0 2px #999;
       -moz-box-shadow: 0 0 2px #999;
            box-shadow: 0 0 2px #999;
}

.jcarousel-control-prev {
    left: -50px;
}

.jcarousel-control-next {
    right: -50px;
}

.jcarousel-control-prev:hover span,
.jcarousel-control-next:hover span {
    display: block;
}

.jcarousel-control-prev.inactive,
.jcarousel-control-next.inactive {
    opacity: .5;
    cursor: default;
}

/** Carousel Pagination **/

.jcarousel-pagination {
    position: absolute;
    bottom: 0;
    left: 15px;
}

.jcarousel-pagination a {
    text-decoration: none;
    display: inline-block;
    
    font-size: 11px;
    line-height: 14px;
    min-width: 14px;
    
    background: #fff;
    color: #4E443C;
    border-radius: 14px;
    padding: 3px;
    text-align: center;
    
    margin-right: 2px;
    
    opacity: .75;
}

.jcarousel-pagination a.active {
    background: #4E443C;
    color: #fff;
    opacity: 1;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.75);
}