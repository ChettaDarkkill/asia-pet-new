    <?php $a =  base_url(); ?>
    <div class="calendar" data-toggle="calendar">
      <br/>
      <div class="row">
        <?php foreach ($list_m['r1'] as $key_r1 => $value_r1) { ?>
        <div class="col-xs-12 calendar-day">
          <time datetime="2014-07-03"><h4 style="color: blue"><?php echo $key_r1; ?></h4></time>

          <?php if(1 != 1) { ?>
            <div ddt = "<?php echo $value_r1['appo_date']; ?>" class="events _data1" data-toggle="modal" data-target="#myModal">
              <div class="" ids = "<?php echo $value_r1['id']; ?>">
                <span class="label label-danger pull-right">ข้อมูลการจอง</span>
              </div>
            </div>
           <?php } else {
              if(is_numeric($key_r1)) { 
              if($mm.'-'.$key_r1  > $currentDate) {
               echo "<h4 >".getThaiDayofWeek($mm.'-'.$key_r1)."</h4><br>";
            ?>
            <?php if($value_r1) { ?>

            <div class="events" data-toggle="modal">
              <div ddts = "<?php echo $mm.'-'.$key_r1; ?>" class="events _data2" data-toggle="modal" data-target="#myModal2">
                <span class="label label-warning pull-right">จองเพิ่มเติม</span>
              </div>
            </div>

          <?php  } else { ?>
            <div class="events" data-toggle="modal">
              <div ddts = "<?php echo $mm.'-'.$key_r1; ?>" class="events _data2" data-toggle="modal" data-target="#myModal2">
                <span class="label label-primary pull-right">ว่าง</span>
              </div>
            </div>

           <?php } } } } ?>
        </div>
        <?php } ?>

      </div>
      <div class="row">
        <?php foreach ($list_m['r2'] as $key_r1 => $value_r1) { ?>
        <div class="col-xs-12 calendar-day">
          <time datetime="2014-07-03"><h4 style="color: blue"><?php echo $key_r1; ?></h4></time>

          <?php if(1 != 1) { ?>
            <div ddt = "<?php echo $value_r1['appo_date']; ?>" class="events _data1" data-toggle="modal" data-target="#myModal">
              <div class="" ids = "<?php echo $value_r1['id']; ?>">
                <span class="label label-danger pull-right">ข้อมูลการจอง</span>
              </div>
            </div>
           <?php } else {
              if(is_numeric($key_r1)) { 
              if($mm.'-'.$key_r1  > $currentDate) {
                echo "<h4>".getThaiDayofWeek($mm.'-'.$key_r1)."</h4><br>";
            ?>
            <?php if($value_r1) { ?>
            <div class="events" data-toggle="modal">
              <div ddts = "<?php echo $mm.'-'.$key_r1; ?>" class="events _data2" data-toggle="modal" data-target="#myModal2">
                <span class="label label-warning pull-right">จองเพิ่มเติม</span>
              </div>
            </div>

          <?php  } else { ?>
            <div class="events" data-toggle="modal">
              <div ddts = "<?php echo $mm.'-'.$key_r1; ?>" class="events _data2" data-toggle="modal" data-target="#myModal2">
                <span class="label label-primary pull-right">ว่าง</span>
              </div>
            </div>

           <?php } } } } ?>
        </div>
        <?php } ?>
      </div>
      <div class="row">
        <?php foreach ($list_m['r3'] as $key_r1 => $value_r1) { ?>
        <div class="col-xs-12 calendar-day">
          <time datetime="2014-07-03"><h4 style="color: blue"><?php echo $key_r1; ?></h4></time>

          <?php if(1 != 1) { ?>
            <div ddt = "<?php echo $value_r1['appo_date']; ?>" class="events _data1" data-toggle="modal" data-target="#myModal">
              <div class="" ids = "<?php echo $value_r1['id']; ?>">
                <span class="label label-danger pull-right">ข้อมูลการจอง</span>
              </div>
            </div>
           <?php } else {
              if(is_numeric($key_r1)) { 
              if($mm.'-'.$key_r1  > $currentDate) {
                echo "<h4>".getThaiDayofWeek($mm.'-'.$key_r1)."</h4><br>";
            ?>
            <?php if($value_r1) { ?>
            <div class="events" data-toggle="modal">
              <div ddts = "<?php echo $mm.'-'.$key_r1; ?>" class="events _data2" data-toggle="modal" data-target="#myModal2">
                <span class="label label-warning pull-right">จองเพิ่มเติม</span>
              </div>
            </div>

          <?php  } else { ?>
            <div class="events" data-toggle="modal">
              <div ddts = "<?php echo $mm.'-'.$key_r1; ?>" class="events _data2" data-toggle="modal" data-target="#myModal2">
                <span class="label label-primary pull-right">ว่าง</span>
              </div>
            </div>

           <?php } } } } ?>
        </div>
        <?php } ?>
      </div>
      <div class="row">
        <?php foreach ($list_m['r4'] as $key_r1 => $value_r1) { ?>
        <div class="col-xs-12 calendar-day">
          <time datetime="2014-07-03"><h4 style="color: blue"><?php echo $key_r1; ?></h4></time>

          <?php if(1 != 1) { ?>
            <div ddt = "<?php echo $value_r1['appo_date']; ?>" class="events _data1" data-toggle="modal" data-target="#myModal">
              <div class="" ids = "<?php echo $value_r1['id']; ?>">
                <span class="label label-danger pull-right">ข้อมูลการจอง</span>
              </div>
            </div>
           <?php } else {
              if(is_numeric($key_r1)) { 
              if($mm.'-'.$key_r1  > $currentDate) {
                echo "<h4>".getThaiDayofWeek($mm.'-'.$key_r1)."</h4><br>";
            ?>
            <?php if($value_r1) { ?>
            <div class="events" data-toggle="modal">
              <div ddts = "<?php echo $mm.'-'.$key_r1; ?>" class="events _data2" data-toggle="modal" data-target="#myModal2">
                <span class="label label-warning pull-right">จองเพิ่มเติม</span>
              </div>
            </div>

          <?php  } else { ?>
            <div class="events" data-toggle="modal">
              <div ddts = "<?php echo $mm.'-'.$key_r1; ?>" class="events _data2" data-toggle="modal" data-target="#myModal2">
                <span class="label label-primary pull-right">ว่าง</span>
              </div>
            </div>

           <?php } } } } ?>
        </div>
        <?php } ?>
      </div>

      <div class="row">
        <?php foreach ($list_m['r5'] as $key_r1 => $value_r1) { ?>
        <div class="col-xs-12 calendar-day">
          <time datetime="2014-07-03"><h4 style="color: blue"><?php echo $key_r1; ?></h4></time>

          <?php if(1 != 1) { ?>
            <div ddt = "<?php echo $value_r1['appo_date']; ?>" class="events _data1" data-toggle="modal" data-target="#myModal">
              <div class="" ids = "<?php echo $value_r1['id']; ?>">
                <span class="label label-danger pull-right">ข้อมูลการจอง</span>
              </div>
            </div>
           <?php } else {
              if(is_numeric($key_r1)) { 
              if($mm.'-'.$key_r1  > $currentDate) {
                echo "<h4>".getThaiDayofWeek($mm.'-'.$key_r1)."</h4><br>";
            ?>
            <?php if($value_r1) { ?>
            <div class="events" data-toggle="modal">
              <div ddts = "<?php echo $mm.'-'.$key_r1; ?>" class="events _data2" data-toggle="modal" data-target="#myModal2">
                <span class="label label-warning pull-right">จองเพิ่มเติม</span>
              </div>
            </div>

          <?php  } else { ?>
            <div class="events" data-toggle="modal">
              <div ddts = "<?php echo $mm.'-'.$key_r1; ?>" class="events _data2" data-toggle="modal" data-target="#myModal2">
                <span class="label label-primary pull-right">ว่าง</span>
              </div>
            </div>

           <?php } } } } ?>
        </div>
        <?php } ?>
      </div>

    </div>
      <!-- Modal -->
  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel" style="color:#333">เลือกช่วงเวลาที่ยังว่าง : <span id = "showtime"></span></h4>
        </div>
        <div class="modal-body">
        <div class="span5" style="color: #333">
              <div id = "get_booking_data" style="color: #333"></div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
        </div>
      </div>
    </div>
  </div>
      <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel" style="color:#333">ข้อมูลการจอง : <span id = "ddtShowTime"></span></h4>
        </div>
        <div class="modal-body">
           <span id = "bookingResult" style="color: #333"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
          <button type="button" class="btn btn-primary addBooking">จองเพิ่มเติม</button>
        </div>
      </div>
    </div>
  </div>

<script>
$(".addBooking").click(function(){
  var dataSelect = $("#ddtShowTime").text();
  var url = "<?php echo "/index.php/Customer/Customer/get_appointment_advance?dd="; ?>" + dataSelect;
  window.location = url;
});

$("._data2").click(function(){
   //$('#clickToLoading').click();
  var dateShow =  $(this).attr('ddts');
  $('#showtime').text(dateShow);

  var data = dateShow;

  var url = "<?php echo $a.'index.php/Customer/GetAppointment/getBookingDetails'; ?>";
  $.post( url , {'data' : data} , function( data ) {
    $("#get_booking_data").html(data);
    //$('#closeLoadingPanel').click();
  });


  
});

$("._data1").click(function(){
   //$('#clickToLoading').click();
  var dateShow =  $(this).attr('ddt');
  $('#ddtShowTime').text(dateShow);

  var data = dateShow;

  var url = "<?php echo $a.'index.php/Customer/GetAppointment/getResutlBooking'; ?>";
  $.post( url , {'data' : data} , function( data ) {
    $("#bookingResult").html(data);
    //$('#closeLoadingPanel').click();
  });


  
});

$(document).ready(function(){
  showPop();

});
function showPop(){
      var attending = parseInt($('#pop1').find('div.progress>.progress-bar').attr('aria-valuenow')),
      total = parseInt($('#pop1').find('div.progress>.progress-bar').attr('aria-valuemax')),
      remaining = total - attending,
      displayAttending = attending - $('#pop1').find('div.attending').children().length,
      html = [
        '<button type="button" class="close"><span class = "ccl" aria-hidden="true">×</span><span class="sr-only">Close</span></button>',
        '<h4>'+$('#pop1').find('h4').text()+'</h4>',
        // '<div class="desc">'+$(this).find('div.desc').html()+'</div>',
        '<div class="location">'+$('#pop1').find('div.location').html()+'</div>',
        '<div class="datetime">'+$('#pop1').find('div.datetime').html()+'</div>',
        // '<div class="space">Attending <span class="pull-right">Available spots</span></div>',
        '<div class="attending">',
          $(this).find('div.attending').html(),
        '</div>',
        '<a href="javascript:void(0);" class="btn btn-success" onClick=window.open("<?php echo $a."index.php/Customer/AppointmentAdvance/printTicket/22" ?>","Ratting","width=500,height=700,0,status=0,scrollbars=1"); role="button">ปริ้นใบนัดหมาย</a>' 
      ].join('\n');

    $('#pop1').attr('title', $('#pop1').find('h4').text());
    $('#pop1').attr('data-content', html);
}
$(function () {
  $('[data-toggle="calendar"] > .row > .calendar-day > .events > .event').popover({
    container: 'body',
    content: 'Hello World',
    html: true,
    placement: 'bottom',
    template: '<div class="popover calendar-event-popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
  });

  $('[data-toggle="calendar"] > .row > .calendar-day > .events > .event').on('show.bs.popover', function () {
    var ids = $(this).attr('ids');
    var strL = "<?php echo $a.'index.php/Customer/AppointmentAdvance/printTicket/' ?>" + ids;
    var attending = parseInt($(this).find('div.progress>.progress-bar').attr('aria-valuenow')),
      total = parseInt($(this).find('div.progress>.progress-bar').attr('aria-valuemax')),
      remaining = total - attending,
      displayAttending = attending - $(this).find('div.attending').children().length,
      html = [
        '<button type="button" class="close"><span class = "ccl"  aria-hidden="true">×</span><span class="sr-only">Close</span></button>',
        '<h4>'+$(this).find('h4').text()+'</h4>',
        // '<div class="desc">'+$(this).find('div.desc').html()+'</div>',
        '<div class="location">'+$(this).find('div.location').html()+'</div>',
        '<div class="datetime">'+$(this).find('div.datetime').html()+'</div>',
        // '<div class="space">Attending <span class="pull-right">Available spots</span></div>',
        '<div class="attending">',
          $(this).find('div.attending').html(),
        '</div>',
        '<a href="javascript:void(0);" class="btn btn-success" onClick=window.open("' + strL + '","Ratting","width=810,height=500,0,status=0,scrollbars=1"); role="button">ปริ้นใบนัดหมาย</a>' 
      ].join('\n');

    $(this).attr('title', $(this).find('h4').text());
    $(this).attr('data-content', html);
  });

  $('[data-toggle="calendar"] > .row > .calendar-day > .events > .event').on('shown.bs.popover', function () {
    var $popup = $(this);
    $('.popover:last-child').find('.close').on('click', function(event) {
      $popup.popover('hide');
    });
  });
});
</script>
<style>
  h1.title {
    font-family: 'Roboto', sans-serif;
    font-weight: 900;
  }
  .calendar {
    margin: 0px 40px;
  }
  .popover.calendar-event-popover {
    font-family: 'Roboto', sans-serif;
    font-size: 12px;
    color: rgb(120, 120, 120);
    border-radius: 2px;
    max-width: 300px;
  }
  .popover.calendar-event-popover h4 {
    font-size: 14px;
    font-weight: 900;
  }
  .popover.calendar-event-popover .location,
  .popover.calendar-event-popover .datetime {
    font-size: 14px;
    font-weight: 700;
    margin-bottom: 5px;
  }
  .popover.calendar-event-popover .location > span,
  .popover.calendar-event-popover .datetime > span {
    margin-right: 10px;
  }
  .popover.calendar-event-popover .space,
  .popover.calendar-event-popover .attending {
    margin-top: 10px;
    padding-bottom: 5px;
    border-bottom: 1px solid rgb(160, 160, 160);
    font-weight: 700;
  }
  .popover.calendar-event-popover .space > .pull-right,
  .popover.calendar-event-popover .attending > .pull-right {
    font-weight: 400;
  }
  .popover.calendar-event-popover .attending {
    margin-top: 5px;
    font-size: 18px;
    padding: 0px 10px 5px;
  }
  .popover.calendar-event-popover .attending img {
    border-radius: 50%;
    width: 40px;
  }
  .popover.calendar-event-popover .attending span.attending-overflow {
    display: inline-block;
    width: 40px;
    background-color: rgb(200, 200, 200);
    border-radius: 50%;
    padding: 8px 0px 7px;
    text-align: center;
  }
  .popover.calendar-event-popover .attending > .pull-right {
    font-size: 28px;
  }
  .popover.calendar-event-popover a.btn {
    margin-top: 10px;
    width: 100%;
    border-radius: 3px;
  }
  [data-toggle="calendar"] > .row > .calendar-day {
    font-family: 'Roboto', sans-serif;
    width: 14.28571428571429%;
    border: 1px solid rgb(235, 235, 235);
    border-right-width: 0px;
    border-bottom-width: 0px;
    min-height: 120px;
  }
  [data-toggle="calendar"] > .row > .calendar-day.calendar-no-current-month {
    color: rgb(200, 200, 200);
  }
  [data-toggle="calendar"] > .row > .calendar-day:last-child {
    border-right-width: 1px;
  }

  [data-toggle="calendar"] > .row:last-child > .calendar-day {
    border-bottom-width: 1px;
  }

  .calendar-day > time {
    position: absolute;
    display: block;
    bottom: 0px;
    left: 0px;
    font-size: 12px;
    font-weight: 300;
    width: 100%;
    padding: 10px 10px 3px 0px;
    text-align: right;
  }
  .calendar-day > .events {
    cursor: pointer;
  }
  .calendar-day > .events > .event h4 {
    font-size: 12px;
    font-weight: 700;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin-bottom: 3px;
  }
  .calendar-day > .events > .event > .desc,
  .calendar-day > .events > .event > .location,
  .calendar-day > .events > .event > .datetime,
  .calendar-day > .events > .event > .attending {
    display: none;
  }
  .calendar-day > .events > .event > .progress {
    height: 10px;
  }
</style>