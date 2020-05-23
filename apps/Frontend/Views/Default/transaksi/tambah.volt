{% extends 'layout.volt' %} {% block body %}
<div class="page-header" style="padding-top: 10px; padding-bottom: 10px">
    <h2>Menambah Bantuan</h2>
</div>
<div class="card">
	<div class="card-header">
		Tambah Transaksi
	</div>
	<div class="card-body">
		<form action="/transaksi/tambahStore" role="form" method="post">
    		<fieldset>
                <input type="text" name="transaksi_id" value="{{transaksi_id}}" hidden>
        		<div class="form-group">
            		<label for="kategori">Kategori</label>
                        <select id="kategori" name="kategori_id">
                            <option value="1">Uang</option>
                            <option value="2">Bahan Makanan</option>
                            <option value="3">Other</option>
                        </select>
        		</div>
                <div class="form-group">
                    <label for="name">Nilai Sumbangan</label>
                    <div class="controls">
                        {{ text_field('nilai', 'class': "form-control") }}
                    </div>
                </div>
        		<div class="form-group">
            		{{ submit_button('Simpan', 'class': 'btn btn-primary btn-large') }}
        		</div>
    	</fieldset>
		</form>
	</div>
</div>


{% endblock %}