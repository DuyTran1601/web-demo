<aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
    <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
       <div class="section-bar clearfix">
          <div class="section-title">
             <span>Đu Trend</span>
          
          </div>
       </div>
       <section class="tab-content">
          <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
             <div class="halim-ajax-popular-post-loading hidden"></div>
             <div id="halim-ajax-popular-post" class="popular-post">
                @foreach($phimhot_sidebar as $key => $hot_sidebar)
                <div class="item post-37176">
                   <a href="{{route('movie',$hot_sidebar->slug)}}" title="{{$hot_sidebar->title}}">
                      <div class="item-link">
                         <img src="{{asset('uploads/movie/'.$hot_sidebar->image)}}" class="lazy post-thumb" alt="{{$hot_sidebar->title}}" title="{{$hot_sidebar->title}}" />
                         {{-- <span class="is_trailer">Trailer</span> --}}
                      </div>
                      <p class="title">{{$hot_sidebar->title}}</p>
                   </a>
                   <div class="viewsCount" style="color: #9d9d9d;">
                     @php
                        echo rand(100,9999);
                     @endphp
                     lượt xem
                  </div>
                   <div style="float: left;">
                      <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                      <span style="width: 0%"></span>
                      </span>
                   </div>
                </div>
                @endforeach
               
               
             </div>
          </div>
       </section>
       <div class="clearfix"></div>
    </div>
 </aside>

 {{-- <aside id="sidebar" class="col-xs-12 col-sm-12 col-md-4">
    <div id="halim_tab_popular_videos-widget-7" class="widget halim_tab_popular_videos-widget">
       <div class="section-bar clearfix">
          <div class="section-title">
             <span>Top Views</span>
             <ul class="halim-popular-tab" role="tablist">
                <li role="presentation" class="active">
                   <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="today">Day</a>
                </li>
                <li role="presentation">
                   <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="week">Week</a>
                </li>
                <li role="presentation">
                   <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="month">Month</a>
                </li>
                <li role="presentation">
                   <a class="ajax-tab" role="tab" data-toggle="tab" data-showpost="10" data-type="all">All</a>
                </li>
             </ul>
          </div>
       </div>
       <section class="tab-content">
          <div role="tabpanel" class="tab-pane active halim-ajax-popular-post">
             <div class="halim-ajax-popular-post-loading hidden"></div>
             <div id="halim-ajax-popular-post" class="popular-post">
                <div class="item post-37176">
                   <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                      <div class="item-link">
                         <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                         <span class="is_trailer">Trailer</span>
                      </div>
                      <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                   </a>
                   <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                   <div style="float: left;">
                      <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                      <span style="width: 0%"></span>
                      </span>
                   </div>
                </div>
                <div class="item post-37176">
                   <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                      <div class="item-link">
                         <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                         <span class="is_trailer">Trailer</span>
                      </div>
                      <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                   </a>
                   <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                   <div style="float: left;">
                      <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                      <span style="width: 0%"></span>
                      </span>
                   </div>
                </div>
                <div class="item post-37176">
                   <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                      <div class="item-link">
                         <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                         <span class="is_trailer">Trailer</span>
                      </div>
                      <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                   </a>
                   <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                   <div style="float: left;">
                      <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                      <span style="width: 0%"></span>
                      </span>
                   </div>
                </div>
                <div class="item post-37176">
                   <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                      <div class="item-link">
                         <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                         <span class="is_trailer">Trailer</span>
                      </div>
                      <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                   </a>
                   <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                   <div style="float: left;">
                      <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                      <span style="width: 0%"></span>
                      </span>
                   </div>
                </div>
                <div class="item post-37176">
                   <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                      <div class="item-link">
                         <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                         <span class="is_trailer">Trailer</span>
                      </div>
                      <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                   </a>
                   <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                   <div style="float: left;">
                      <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                      <span style="width: 0%"></span>
                      </span>
                   </div>
                </div>
                <div class="item post-37176">
                   <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                      <div class="item-link">
                         <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                         <span class="is_trailer">Trailer</span>
                      </div>
                      <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                   </a>
                   <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                   <div style="float: left;">
                      <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                      <span style="width: 0%"></span>
                      </span>
                   </div>
                </div>
                <div class="item post-37176">
                   <a href="chitiet.php" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ">
                      <div class="item-link">
                         <img src="https://ghienphim.org/uploads/GPax0JpZbqvIVyfkmDwhRCKATNtLloFQ.jpeg?v=1624801798" class="lazy post-thumb" alt="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" title="CHỊ MƯỜI BA: BA NGÀY SINH TỬ" />
                         <span class="is_trailer">Trailer</span>
                      </div>
                      <p class="title">CHỊ MƯỜI BA: BA NGÀY SINH TỬ</p>
                   </a>
                   <div class="viewsCount" style="color: #9d9d9d;">3.2K lượt xem</div>
                   <div style="float: left;">
                      <span class="user-rate-image post-large-rate stars-large-vang" style="display: block;/* width: 100%; */">
                      <span style="width: 0%"></span>
                      </span>
                   </div>
                </div>
               
               
             </div>
          </div>
       </section>
       <div class="clearfix"></div>
    </div>
 </aside> --}}