{% extends 'layout.volt' %} {% block body %}
<div class="page-header" style="padding-top: 10px; padding-bottom: 10px">
    <a href="http://www.fp_pbkk.localhost/transaksi/create">
        <button class="btn btn-primary" style="float: right;">Tambah Transaksi</button>
    </a>
    <h2>Transaksi</h2> 
</div>
<div class="table-responsive">
    <table id="mytable" class="table table-hover">
        <thead>
            <tr>
                <th style="width: 5%">#</th>
                <th>Nama Penyumbang</th>
                <th style="width: 20%">Waktu Sumbangan</th>
                <th style="width: 10%">option</th>
            </tr>
        </thead>
        <tbody>
            {% for transaksi in transaksis %}
            <tr>
                <td>{{ transaksi.getTransaksiId() }}</td>
                <td>{{ transaksi.getNamaPenyumbang() }}</td>
                <td>{{ transaksi.getWaktuSumbangan() }}</td>
                <td><a href="http://www.fp_pbkk.localhost/transaksi/show/{{transaksi.getTransaksiId()}}">Detail</a></td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
