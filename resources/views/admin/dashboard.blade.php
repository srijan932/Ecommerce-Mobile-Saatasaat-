@extends('admin_layout.layout')


@section('css')
  <link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/demo/demo8/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
      <!--begin:: Widgets/Latest Updates-->
      <div class="m-portlet m-portlet--full-height m-portlet--fit  m-portlet--rounded">
        <div class="m-portlet__head">
          <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
              <h3 class="m-portlet__head-text">
                Activity 
              </h3>
            </div>
          </div>
        </div>
        <div class="m-portlet__body">
          <div class="m-widget4 m-widget4--chart-bottom" style="min-height: 350px">
            <div class="m-widget4__item">
              <div class="m-widget4__ext">
                <a href="/admin/users" class="m-widget4__icon m--font-brand">
                  <i class="flaticon-interface-3"></i>
                </a>
              </div>
              <div class="m-widget4__info">
                <span class="m-widget4__text">
                  Users
                </span>
              </div>
              <div class="m-widget4__ext">
                <span class="m-widget4__number m--font-accent">
              {{ count($users)}}
                </span>
              
              </div>
            </div>
            <div class="m-widget4__item">
              <div class="m-widget4__ext">
                <a href="/admin/posts" class="m-widget4__icon m--font-brand">
                  <i class="flaticon-folder-4"></i>
                </a>
              </div>
              <div class="m-widget4__info">
                <span class="m-widget4__text">
                  Post
                </span>
              </div>
              <div class="m-widget4__ext">
                <span class="m-widget4__stats m--font-info">
                  <span class="m-widget4__number m--font-accent">
                    {{ count($posts)}}
                  </span>
                </span>
              </div>
            </div>
            
            <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20 m-portlet-fit--bottom1" style="height:120px;">
              <canvas id="m_chart_latest_updates"></canvas>
            </div>
          </div>
        </div>
      </div>
@endsection
@section('scripts')
<script>

</script>
@endsection