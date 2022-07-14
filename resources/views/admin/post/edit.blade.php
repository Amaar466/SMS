@extends('layout.home')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Post</h4>
        </div>
        <div class="card-body">

            @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif
    
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <form action="{{url('admin/update-blog')}}/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" value="{{$post->title}}" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <td>
                        <select class="browser-default custom-select custom-select-md mb-3" name="type">
                            <option value="blog" @if ($post->type == 'blog')
                            selected
                            @endif>Blogs</option>
                            <option value="page" @if ($post->type == 'page')
                                selected
                                @endif>Page</option>
                            <option value="service" @if ($post->type == 'service')
                                selected
                                @endif>Service</option>
                                <option value="job" @if ($post->type == 'job')
                                    selected
                                    @endif>Service</option>
                          </select>
                        </td>
                </div>
                <div class="form-group">
                    <label>Keyword</label>
                    <input type="text" value="{{$post->keyword}}" class="form-control" name="keyword">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" value="{{$post->description}}" class="form-control" name="description">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" multiple="" name="image" style="position: unset;opacity: 1;  width:100%;">                  
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <div id="standalone-container">
                        <!-- <div id="toolbar-container">
                          <span class="ql-formats">
                            <select class="ql-font"></select>
                            <select class="ql-size"></select>
                          </span>
                          <span class="ql-formats">
                            <button class="ql-bold"></button>
                            <button class="ql-italic"></button>
                            <button class="ql-underline"></button>
                            <button class="ql-strike"></button>
                          </span>
                          <span class="ql-formats">
                            <select class="ql-color"></select>
                            <select class="ql-background"></select>
                          </span>
                          <span class="ql-formats">
                            <button class="ql-script" value="sub"></button>
                            <button class="ql-script" value="super"></button>
                          </span>
                          <span class="ql-formats">
                            <button class="ql-header" value="1"></button>
                            <button class="ql-header" value="2"></button>
                            <button class="ql-blockquote"></button>
                            <button class="ql-code-block"></button>
                          </span>
                          <span class="ql-formats">
                            <button class="ql-list" value="ordered"></button>
                            <button class="ql-list" value="bullet"></button>
                            <button class="ql-indent" value="-1"></button>
                            <button class="ql-indent" value="+1"></button>
                          </span>
                          <span class="ql-formats">
                            <button class="ql-direction" value="rtl"></button>
                            <select class="ql-align"></select>
                          </span>
                          <span class="ql-formats">
                            <button class="ql-link"></button>
                            <button class="ql-image"></button>
                            <button class="ql-video"></button>
                            <button class="ql-formula"></button>
                          </span>
                          <span class="ql-formats">
                            <button class="ql-clean"></button>
                          </span>
                        </div> -->
                        <div id="editor-container"></div>
                      </div>
                      
                    <div id="editor"></div>
                    <textarea class="form-control d-none" name="content" cols="3" rows="5" id="tosend">{{$post->content}}</textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>   
                </div>
    
            </form>
        </div>
        
    </div>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/monokai-sublime.min.css" />   
    <script src="//cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.quilljs.com/2.0.0-dev.3/quill.js"></script>
<script src="https://unpkg.com/quill-better-table@1.2.8/dist/quill-better-table.min.js"></script>
<link type="text/css" href="https://cdn.quilljs.com/2.0.0-dev.3/quill.snow.css" rel="stylesheet">
<link type="text/css" href="https://unpkg.com/quill-better-table@1.2.7/dist/quill-better-table.css" rel="stylesheet" />

<script>
$(function() {
Quill.register({
  'modules/better-table': quillBetterTable
}, true);



var tableOptions = [];
var maxRows = 7;
var maxCols = 7;

for (let r = 1; r <= maxRows; r++) {
  for (let c = 1; c <= maxCols; c++) {
    tableOptions.push('newtable_' + r + '_' + c);
  }
}

var toolbarOptions = [
  ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
  ['blockquote', 'code-block'],
  [{ 'header': 1 }, { 'header': 2 }],               // custom button values
  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
  [{ 'direction': 'rtl' }],    
  [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],                     // text direction
  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
  [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
  [{'color': ["#000000", "#e60000", "#ff9900", "#ffff00", "#008a00", "#0066cc", "#9933ff", "#ffffff", "#facccc", "#ffebcc", "#ffffcc", "#cce8cc", "#cce0f5", "#ebd6ff", "#bbbbbb", "#f06666", "#ffc266", "#ffff66", "#66b966", "#66a3e0", "#c285ff", "#888888", "#a10000", "#b26b00", "#b2b200", "#006100", "#0047b2", "#6b24b2", "#444444", "#5c0000", "#663d00", "#666600", "#003700", "#002966", "#3d1466", 'custom-color']}],
  [{ 'link' : "link" }],
  [{ 'image' : "image" }],
  [{ 'video' : "video" }],
  [{ 'formula' : "formula" }],
  [{ 'code-block' : "code-block"}]
  ['clean'],                                         // remove formatting button
  [{'Table-Input': tableOptions}]
];



var curQuillDiv = $("#editor");

var curQuill = new Quill(curQuillDiv[0], {
  placeholder: 'Compose your text...',
  theme: 'snow',
  modules: {
    toolbar: toolbarOptions,
    table: false,
    syntax: true,
    'better-table': {
      operationMenu: {
        items: {
          unmergeCells: {
            text: 'Unmerge cells'
          }
        },
        color: {
          colors: ['green', 'red', 'yellow', 'blue', 'white'],
          text: 'Background Colors:'
        }
			}
		},
    keyboard: {
      bindings: quillBetterTable.keyboardBindings
    }
	}
});
     var h = document.getElementById("tosend").value.trim();
     curQuill.clipboard.dangerouslyPasteHTML(0, h);
     curQuill.on('text-change', function(delta, oldDelta, source) {
        var sHTML = document.getElementById("editor").childNodes[0].innerHTML
        $("#tosend").val(sHTML);
});

var curTableIconSpan = curQuillDiv.parent().find('span.ql-Table-Input.ql-picker')[0].childNodes[0];
curTableIconSpan.innerHTML = "<svg style=\"right: 4px;\" viewbox=\"0 0 18 18\"> <rect class=ql-stroke height=12 width=12 x=3 y=3></rect> <rect class=ql-fill height=2 width=3 x=5 y=5></rect> <rect class=ql-fill height=2 width=4 x=9 y=5></rect> <g class=\"ql-fill ql-transparent\"> <rect height=2 width=3 x=5 y=8></rect> <rect height=2 width=4 x=9 y=8></rect> <rect height=2 width=3 x=5 y=11></rect> <rect height=2 width=4 x=9 y=11></rect> </g> </svg>";
var curTableCellIconSpans = $(curTableIconSpan.parentNode.childNodes[1]).children();
curTableCellIconSpans.click((function(){
  var curQuillBetterTable = curQuill.getModule('better-table');
  var curQuillToolbar = curQuill.getModule('toolbar');
  return function() {
    var curRowIndex = Number(this.dataset.value.substring(9).split('_')[0]);
    var curColIndex = Number(this.dataset.value.substring(9).split('_')[1]);
    curQuillBetterTable.insertTable(curRowIndex, curColIndex);
    // The following two lines have been added, thinking that it would fix the issue of keeping the icon in blue color.  However Quill keeps adding the classes back, so this fix doesn't work.
    $(this).parent().parent().find(".ql-selected").removeClass("ql-selected");     	 $(this).parent().parent().find(".ql-active").removeClass("ql-active");
  };
})());
curTableCellIconSpans.hover(function(){
  var curRowIndex = Number(this.dataset.value.substring(9).split('_')[0]);
  var curColIndex = Number(this.dataset.value.substring(9).split('_')[1]);
  $(this).parent().children().each((function() {
    var curRowIndex1 = curRowIndex;
    var curColIndex1 = curColIndex;
    return function() {
      var curRowIndex2 = Number(this.dataset.value.substring(9).split('_')[0]);
      var curColIndex2 = Number(this.dataset.value.substring(9).split('_')[1]);
      if (curRowIndex2 <= curRowIndex1 && curColIndex2 <= curColIndex1) {
        $(this).addClass("ql-picker-item-highlight");
      }
    };
  })());


}, function(){
  $(this).parent().children().removeClass("ql-picker-item-highlight");
}); 
});

  </script>
@endsection
