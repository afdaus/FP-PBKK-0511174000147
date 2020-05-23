{% extends 'layout.volt' %} {% block body %}
<div class="page-header" style="padding-top: 10px; padding-bottom: 10px">
    <h2>Transaksi</h2>
</div>
<div class="card">
	<div class="card-header">
		Tambah Transaksi
	</div>
	<div class="card-body">
		<form action="/transaksi/store" role="form" method="post">
    		<fieldset>
        		<div class="form-group">
            		<label for="name">Nama Penyumbang</label>
            		<div class="controls">
                		{{ text_field('nama', 'class': "form-control") }}
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