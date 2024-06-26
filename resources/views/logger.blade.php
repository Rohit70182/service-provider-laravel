@extends('admin.layouts.app')
@section('content')
 <link rel="stylesheet" type="text/css" href="/public/assets/css/dataTables.bootstrap4.min.css">
  <style>
    #table-log {
        font-size: 0.85rem;
    }
    .btn {
        font-size: 0.7rem;
    }
    .stack {
      font-size: 0.85em;
    }
    .date {
      min-width: 75px;
    }
    .text {
      word-break: break-all;
    }
    a.llv-active {
      z-index: 2;
      background-color: #f5f5f5;
      border-color: #777;
    }
    .list-group-item {
      word-break: break-word;
    }
    .folder {
      padding-top: 15px;
    }

    .div-scroll {
      height: 80vh;
      overflow: hidden auto;
    }
    .nowrap {
      white-space: nowrap;
    }
    .list-group {
            padding: 5px;
        }
  </style>

<div class="dash-home-cards">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="ProfileHader d-flex flex-wrap align-items-center">
            <h3 class="font_600 font-18 font-md-20 mr-auto pr-20">Logs</h3>  
             </div>
              </div>
               <div class="card-body">
                <div class="col-12 table-container">
                 @if ($logs === null)
                <div>
                Log file >50M, please download it.
                </div>
                @else
                <table id="table-log" class="table table-striped" data-ordering-index="{{ $standardFormat ? 2 : 0 }}">
                <thead>
                <tr>
                  @if ($standardFormat)
                    <th>Level</th>
                    <th>Context</th>
                    <th>Date</th>
                  @else
                    <th>Line number</th>
                  @endif
                  <th>Content</th>
                </tr>
                </thead>
                <tbody>
                @foreach($logs as $key => $log)
                  <tr data-display="stack{{{$key}}}">
                    @if ($standardFormat)
                      <td class="nowrap text-{{{$log['level_class']}}}">
                        <span class="fa fa-{{{$log['level_img']}}}" aria-hidden="true"></span>&nbsp;&nbsp;{{$log['level']}}
                      </td>
                      <td class="text">{{$log['context']}}</td>
                    @endif
                    <td class="date">{{{$log['date']}}}</td>
                    <td class="text">
                      @if ($log['stack'])
                        <button type="button"
                                class="float-right expand btn btn-outline-dark btn-sm mb-2 ml-2"
                                data-display="stack{{{$key}}}">
                          <span class="fa fa-search"></span>
                        </button>
                      @endif
                      {{{$log['text']}}}
                      @if (isset($log['in_file']))
                        <br/>{{{$log['in_file']}}}
                      @endif
                      @if ($log['stack'])
                        <div class="stack" id="stack{{{$key}}}"
                             style="display: none; white-space: pre-wrap;">{{{ trim($log['stack']) }}}
                        </div>
                      @endif
                    </td>
                  </tr>
                @endforeach

                </tbody>
              </table>
            @endif
            <div class="p-3">
              @if($current_file)
                <a href="?dl={{ \Illuminate\Support\Facades\Crypt::encrypt($current_file) }}{{ ($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : '' }}">
                  <span class="fa fa-download"></span> Download file
                </a>
                -
                <a id="clean-log" href="?clean={{ \Illuminate\Support\Facades\Crypt::encrypt($current_file) }}{{ ($current_folder) ? '&f=' . \Illuminate\Support\Facades\Crypt::encrypt($current_folder) : '' }}">
                  <span class="fa fa-sync"></span> Clean file
                </a>
                
                @if(count($files) > 1)
              
                @endif
              @endif
            </div>
          </div>

        </div>
     </div>
    </div>
  </div>
</div>


<!-- FontAwesome -->
<!-- Datatables -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script>   
  $(document).ready(function () {
    $('.table-container tr').on('click', function () {
      $('#' + $(this).data('display')).toggle();
    });
    $('#table-log').DataTable({
      "order": [$('#table-log').data('orderingIndex'), 'desc'],
      "stateSave": true,
      "stateSaveCallback": function (settings, data) {
        window.localStorage.setItem("datatable", JSON.stringify(data));
      },
      "stateLoadCallback": function (settings) {
        var data = JSON.parse(window.localStorage.getItem("datatable"));
        if (data) data.start = 0;
        return data;
      }
    });
    $('#delete-log, #clean-log, #delete-all-log').click(function () {
      return confirm('Are you sure?');
    });
  });
</script>

</body>
</html>
@endsection