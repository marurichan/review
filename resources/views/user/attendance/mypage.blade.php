@extends ('common.user')
@section ('content')

<h2 class="brand-header">マイページ</h2>

<div class="main-wrap">
  <div class="btn-wrapper">
    <div class="my-info day-info">
      <p>学習経過日数</p>
      <div class="study-hour-box clearfix">
        <div class="userinfo-box"><img src="https://avatars.slack-edge.com/2019-01-25/532734044915_486bec3294a9f7b34291_192.png"></div>
        <p class="study-hour"><span>3</span>日</p>
      </div>
    </div>
    <div class="my-info">
      <p>累計学習時間</p>
      <div class="study-hour-box clearfix">
        <div class="userinfo-box"><img src="https://avatars.slack-edge.com/2019-01-25/532734044915_486bec3294a9f7b34291_192.png"></div>
        <p class="study-hour"><span>18</span>時間</p>
      </div>
    </div>
  </div>
  <div class="content-wrapper table-responsive">
    <table class="table">
      <thead>
        <tr class="row">
          <th class="col-xs-2">date</th>
          <th class="col-xs-3">start time</th>
          <th class="col-xs-3">end time</th>
          <th class="col-xs-2">state</th>
          <th class="col-xs-2">request</th>
        </tr>
      </thead>
      <tbody>
      <tr class="row">
        <td class="col-xs-2">07/01 (Mon)</td>
        <td class="col-xs-3">08:29</td>
        <td class="col-xs-3">19:30</td>
        <td class="col-xs-2">出社</td>
        <td class="col-xs-2">-</td>
      </tr>
      <tr class="row absent-row">
        <td class="col-xs-2">07/02 (Tue)</td>
        <td class="col-xs-3">-</td>
        <td class="col-xs-3">-</td>
        <td class="col-xs-2">欠席</td>
        <td class="col-xs-2">-</td>
      </tr>
      <tr class="row">
        <td class="col-xs-2">07/03 (Wed)</td>
        <td class="col-xs-3">10:44</td>
        <td class="col-xs-3">19:37</td>
        <td class="col-xs-2">出社</td>
        <td class="col-xs-2">申請中</td>
      </tr>
      <tr class="row">
        <td class="col-xs-2">07/04 (Thr)</td>
        <td class="col-xs-3">08:52</td>
        <td class="col-xs-3">-</td>
        <td class="col-xs-2">研修中</td>
        <td class="col-xs-2">-</td>
      </tr>
      </tbody>
    </table>
  </div>
</div>

@endsection

