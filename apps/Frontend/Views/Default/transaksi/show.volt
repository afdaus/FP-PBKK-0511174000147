{% extends 'layout.volt' %} {% block body %}
<div class="page-header" style="padding-top: 10px; padding-bottom: 10px">
    <h2>Transaksi</h2>
</div>

<div class="card">
	<div class="card-header">
		Detail Transaksi
	</div>
	<div class="card-body">
		<div class="form-group row">
			<div class="col-sm-4">
				Nama Penyumbang
			</div>
			<div class="col-sm-8">
				{{transaksi.getNamaPenyumbang()}}
			</div>
		</div>
		<div class="form-group row">
			<div class="col-sm-4">
				Waktu Sumbangan
			</div>
			<div class="col-sm-8">
				{{transaksi.getWaktuSumbangan()}}
			</div>
		</div>
	</div>
</div>

<br>
<br>
<div class="card">
	<div class="card-header">
		Bantuan yang diberikan
		<a href="/transaksi/tambah/{{transaksi.getTransaksiId()}}">
			<button style="float: right;" class="btn btn-primary">
				Tambah Bantuan
			</button>
		</a>
	</div>
	<div class="card-body">
		<table id="mytable" class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Kategori id</th>
                <th>Nilai sumbangan</th>
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
</div>

{% endblock %}