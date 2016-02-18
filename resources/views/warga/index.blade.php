@extends('admin')

@section('page_title', 'Data Table')

@section('content')

<div class="col-md-12">
<div class="box">
<div class="box-header">
  <h3 class="box-title">Data Table With Full Features</h3>
</div><!-- /.box-header -->
<div class="box-body">
  <table id="datatable" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Rendering engine</th>
        <th>Browser</th>
        <th>Platform(s)</th>
        <th>Engine version</th>
        <th>CSS grade</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Trident</td>
        <td>Internet Explorer 4.0</td>
        <td>Win 95+</td>
        <td> 4</td>
        <td>X</td>
      </tr>
      <tr>
        <td>Webkit</td>
        <td>Safari 1.3</td>
        <td>OSX.3</td>
        <td>312.8</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Webkit</td>
        <td>Safari 2.0</td>
        <td>OSX.4+</td>
        <td>419.3</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Webkit</td>
        <td>Safari 3.0</td>
        <td>OSX.4+</td>
        <td>522.1</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Webkit</td>
        <td>OmniWeb 5.5</td>
        <td>OSX.4+</td>
        <td>420</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Webkit</td>
        <td>iPod Touch / iPhone</td>
        <td>iPod</td>
        <td>420.1</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Webkit</td>
        <td>S60</td>
        <td>S60</td>
        <td>413</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Presto</td>
        <td>Opera 7.0</td>
        <td>Win 95+ / OSX.1+</td>
        <td>-</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Presto</td>
        <td>Opera 7.5</td>
        <td>Win 95+ / OSX.2+</td>
        <td>-</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Presto</td>
        <td>Opera 8.0</td>
        <td>Win 95+ / OSX.2+</td>
        <td>-</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Presto</td>
        <td>Opera 8.5</td>
        <td>Win 95+ / OSX.2+</td>
        <td>-</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Presto</td>
        <td>Opera 9.0</td>
        <td>Win 95+ / OSX.3+</td>
        <td>-</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Presto</td>
        <td>Opera 9.2</td>
        <td>Win 88+ / OSX.3+</td>
        <td>-</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Presto</td>
        <td>Opera 9.5</td>
        <td>Win 88+ / OSX.3+</td>
        <td>-</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Presto</td>
        <td>Opera for Wii</td>
        <td>Wii</td>
        <td>-</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Presto</td>
        <td>Nokia N800</td>
        <td>N800</td>
        <td>-</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Presto</td>
        <td>Nintendo DS browser</td>
        <td>Nintendo DS</td>
        <td>8.5</td>
        <td>C/A<sup>1</sup></td>
      </tr>
      <tr>
        <td>KHTML</td>
        <td>Konqureror 3.1</td>
        <td>KDE 3.1</td>
        <td>3.1</td>
        <td>C</td>
      </tr>
      <tr>
        <td>KHTML</td>
        <td>Konqureror 3.3</td>
        <td>KDE 3.3</td>
        <td>3.3</td>
        <td>A</td>
      </tr>
      <tr>
        <td>KHTML</td>
        <td>Konqureror 3.5</td>
        <td>KDE 3.5</td>
        <td>3.5</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Tasman</td>
        <td>Internet Explorer 4.5</td>
        <td>Mac OS 8-9</td>
        <td>-</td>
        <td>X</td>
      </tr>
      <tr>
        <td>Tasman</td>
        <td>Internet Explorer 5.1</td>
        <td>Mac OS 7.6-9</td>
        <td>1</td>
        <td>C</td>
      </tr>
      <tr>
        <td>Tasman</td>
        <td>Internet Explorer 5.2</td>
        <td>Mac OS 8-X</td>
        <td>1</td>
        <td>C</td>
      </tr>
      <tr>
        <td>Misc</td>
        <td>NetFront 3.1</td>
        <td>Embedded devices</td>
        <td>-</td>
        <td>C</td>
      </tr>
      <tr>
        <td>Misc</td>
        <td>NetFront 3.4</td>
        <td>Embedded devices</td>
        <td>-</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Misc</td>
        <td>Dillo 0.8</td>
        <td>Embedded devices</td>
        <td>-</td>
        <td>X</td>
      </tr>
      <tr>
        <td>Misc</td>
        <td>Links</td>
        <td>Text only</td>
        <td>-</td>
        <td>X</td>
      </tr>
      <tr>
        <td>Trident</td>
        <td>Internet
          Explorer 5.0</td>
        <td>Win 95+</td>
        <td>5</td>
        <td>C</td>
      </tr>
      <tr>
        <td>Trident</td>
        <td>Internet
          Explorer 5.5</td>
        <td>Win 95+</td>
        <td>5.5</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Trident</td>
        <td>Internet
          Explorer 6</td>
        <td>Win 98+</td>
        <td>6</td>
        <td>A</td>
      </tr>
      <tr>
        <td>Trident</td>
        <td>Internet Explorer 7</td>
        <td>Win XP SP2+</td>
        <td>7</td>
        <td>A</td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th>Rendering engine</th>
        <th>Browser</th>
        <th>Platform(s)</th>
        <th>Engine version</th>
        <th>CSS grade</th>
      </tr>
    </tfoot>
  </table>
</div><!-- /.box-body -->
</div><!-- /.box -->
</div>

@endsection