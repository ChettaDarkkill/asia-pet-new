    <?php $a =  base_url(); ?>
    <div class="calendar" data-toggle="calendar">
      <br/>
      <?php 
       // echo '<pre>';
       // print_r($list_m);
       // die;
    ?>  
      <div class="row">

        <?php foreach ($list_m['r1'] as $key_r1 => $value_r1) { ?>
        <div class="col-xs-12 calendar-day">
          <time datetime="2014-07-03"><?php echo $key_r1; ?></time>

          <?php if($value_r1 != '') { ?>

            <div class="events">
              <div class="event" ids = "<?php echo $value_r1['id']; ?>">
                <h4><?php echo $value_r1['appo_animal'] . " : " . $value_r1['appo_details'] ; ?></h4>
                <div class="location"> <span class="glyphicon glyphicon-map-marker"></span> เอเชียเพทคลินิก </div>
                <div class="datetime"> <span class="glyphicon glyphicon-time"></span> <?php echo $value_r1['appo_time']?></div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="320" style="width: 100%;">
                  </div>
                </div>
              </div>
            </div>
           <?php } ?>

        </div>
        <?php } ?>

      </div>
      <div class="row">
        <?php foreach ($list_m['r2'] as $key_r1 => $value_r1) { ?>
        <div class="col-xs-12 calendar-day">
          <time datetime="2014-07-03"><?php echo $key_r1; ?></time>

          <?php if($value_r1 != '') { ?>

            <div class="events">
              <div class="event" ids = "<?php echo $value_r1['id']; ?>">
                <h4><?php echo $value_r1['appo_animal'] . " : " . $value_r1['appo_details'] ; ?></h4>
                <div class="location"> <span class="glyphicon glyphicon-map-marker"></span> เอเชียเพทคลินิก </div>
                <div class="datetime"> <span class="glyphicon glyphicon-time"></span> <?php echo $value_r1['appo_time']?></div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="320" style="width: 100%;">
                  </div>
                </div>
              </div>
            </div>
           <?php } ?>

        </div>
        <?php } ?>
      </div>
      <div class="row">
        <?php foreach ($list_m['r3'] as $key_r1 => $value_r1) { ?>
        <div class="col-xs-12 calendar-day">
          <time datetime="2014-07-03"><?php echo $key_r1; ?></time>

          <?php if($value_r1 != '') { ?>

            <div class="events">
              <div class="event" ids = "<?php echo $value_r1['id']; ?>">
                <h4><?php echo $value_r1['appo_animal'] . " : " . $value_r1['appo_details'] ; ?></h4>
                <div class="location"> <span class="glyphicon glyphicon-map-marker"></span> เอเชียเพทคลินิก </div>
                <div class="datetime"> <span class="glyphicon glyphicon-time"></span> <?php echo $value_r1['appo_time']?></div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="320" style="width: 100%;">
                  </div>
                </div>
              </div>
            </div>
           <?php } ?>

        </div>
        <?php } ?>
      </div>
      <div class="row">
        <?php foreach ($list_m['r4'] as $key_r1 => $value_r1) { ?>
        <div class="col-xs-12 calendar-day">
          <time datetime="2014-07-03"><?php echo $key_r1; ?></time>

          <?php if($value_r1 != '') { ?>

            <div class="events">
              <div class="event" ids = "<?php echo $value_r1['id']; ?>">
                <h4><?php echo $value_r1['appo_animal'] . " : " . $value_r1['appo_details'] ; ?></h4>
                <div class="location"> <span class="glyphicon glyphicon-map-marker"></span> เอเชียเพทคลินิก </div>
                <div class="datetime"> <span class="glyphicon glyphicon-time"></span> <?php echo $value_r1['appo_time']?></div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="320" style="width: 100%;">
                  </div>
                </div>
              </div>
            </div>
           <?php } ?>

        </div>
        <?php } ?>
      </div>

      <div class="row">
        <?php foreach ($list_m['r5'] as $key_r1 => $value_r1) { ?>
        <div class="col-xs-12 calendar-day">
          <time datetime="2014-07-03"><?php echo $key_r1; ?></time>

          <?php if($value_r1 != '') { ?>

            <div class="events">
              <div class="event" ids = "<?php echo $value_r1['id']; ?>">
                <h4><?php echo $value_r1['appo_animal'] . " : " . $value_r1['appo_details'] ; ?></h4>
                <div class="location"> <span class="glyphicon glyphicon-map-marker"></span> เอเชียเพทคลินิก </div>
                <div class="datetime"> <span class="glyphicon glyphicon-time"></span> <?php echo $value_r1['appo_time']?></div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="320" style="width: 100%;">
                  </div>
                </div>
              </div>
            </div>
           <?php } ?>

        </div>
        <?php } ?>
      </div>

    </div>
<script>
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
        '<a href="javascript:void(0);" class="btn btn-success" onClick=window.open("<?php echo $a."index.php/Customer/AppointmentAdvance/printTicket/22" ?>","Ratting","width=810,height=700,0,status=0,scrollbars=1"); role="button">ปลิ้นใบนัดหมาย</a>' 
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
        '<a href="javascript:void(0);" class="btn btn-success" onClick=window.open("' + strL + '","Ratting","width=810,height=700,0,status=0,scrollbars=1"); role="button">ปลิ้นใบนัดหมาย</a>' 
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