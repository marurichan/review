@extends ('common.user')
@section ('content')

<h1 class="brand-header">日報詳細</h1>
<div class="main-wrap">
  <div class="panel panel-success">
    <div class="panel-heading">
      金谷の日報
    </div>
    <div class="table-responsive">
      <table class="table table-striped table-bordered">
        <tbody>
          <tr>
            <th class="table-column">Title</th>
            <td class="td-text"></td>
          </tr>
          <tr>
            <th class="table-column">Content</th>
            <td class='td-text'></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="btn-bottom-wrapper">
    <a class="btn btn-edit" href=""><i class="fa fa-pencil" aria-hidden="true"></i></a>
    <div class="btn-delete">
      <form>
        <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o"></i></button>
      </form>
    </div>
  </div>
</div>

@endsection
