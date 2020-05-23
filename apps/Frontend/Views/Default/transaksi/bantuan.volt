{% extends 'layout.volt' %} {% block body %}
<div class="page-header" style="padding-top: 10px; padding-bottom: 10px">
    <h2>Rekap Bantuan</h2>
</div>
<div class="sub-header" style="margin-bottom: 20px">
    <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Pilih Kategori
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a href="http://www.fp_pbkk.localhost/transaksi/bantuan/1">Uang</a></li>
        <li><a href="http://www.fp_pbkk.localhost/transaksi/bantuan/2">Bahan Makanan</a></li>
        <li><a href="http://www.fp_pbkk.localhost/transaksi/bantuan/3">Other</a></li>
    </ul>
    </div>
</div>

<div class="table-responsive">
    <table id="tabelbantuan" class="table table-hover">
        <thead>
            <tr>
                <th style="width: 5%">#</th>
                <th>kategori</th>
                <th style="width: 10%">nilai_sumbangan</th>
            </tr>
        </thead>
        <tbody>
            {% for bantuan in bantuans %}
            <tr>
                <td>{{ bantuan.getBantuanId() }}</td>
                <td>{{(bantuan.getId() == 1) ? "Uang" : ((bantuan.getId() == 2) ? "Bahan Makanan" : "Other")}}</td>
                <td>{{ bantuan.getNilaiSumbangan() }}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}