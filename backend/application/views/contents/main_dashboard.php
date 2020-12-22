
<ul class="info-blocks">
	<li class="bg-primary">
		<div class="top-info">
			<a href="<?php echo base_url().'article/add'; ?>">Add new article</a>
			<small>editorial</small>
		</div>

		<a href="<?php echo base_url().'article/add'; ?>"><i class="icon-pencil"></i></a>
		<span class="bottom-info bg-danger"><?php echo $total_article_draft; ?> drafts in progress</span>
	</li>
	<li class="bg-info">
		<div class="top-info">
			<a href="<?php echo base_url().'article'; ?>">Published Articles</a>
			<small>editorial</small>
		</div>

		<a href="<?php echo base_url().'article'; ?>"><i class="icon-file"></i></a>
		<span class="bottom-info bg-primary"><?php echo $total_article_published; ?> published articles</span>
	</li>

	<li class="bg-warning">
		<div class="top-info">
			<a href="<?php echo base_url().'video/create'; ?>">Upload Video</a>
			<small>media library</small>
		</div>

		<a href="<?php echo base_url().'video/create'; ?>"><i class="icon-film"></i></a>
		<span class="bottom-info bg-primary"><?php echo $total_upload_video; ?> uploaded</span>
	</li>
</ul>
<br><br>
<!-- Statistics -->
<div class="block">
	<ul class="statistics">
		<li>
			<div class="statistics-info">
				<a href="javascript:void(0)" style="cursor: default;" class="bg-success"><i class="icon-eye"></i></a>
				<strong><?php echo number_format($total_video,0,"","."); ?></strong>
			</div>
			<div class="progress progress-micro">
				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
					<span class="sr-only">100% Complete</span>
				</div>
			</div>
			<span>Total Video Publish</span>
		</li>
		<li>
			<div class="statistics-info">
				<a href="javascript:void(0)" style="cursor: default; " class="bg-warning"><i class="icon-eye"></i></a>
				<strong><?php echo number_format($youtube_views_count,0,"","."); ?></strong>
			</div>
			<div class="progress progress-micro">
				<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
					<span class="sr-only">100% Complete</span>
				</div>
			</div>
			<span>Youtube Views</span>
		</li>
		<li>
			<div class="statistics-info">
				<a href="javascript:void(0)" style="cursor: default;" class="bg-info"><i class="icon-eye"></i></a>
				<strong><?php echo number_format($dailymotion_views_count,0,"","."); ?></strong>
			</div>
			<div class="progress progress-micro">
				<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
					<span class="sr-only">100% Complete</span>
				</div>
			</div>
			<span>Dailymotion Views</span>
		</li>
		<li>
			<div class="statistics-info">
				<a href="javascript:void(0)" style="cursor: default;" class="bg-danger"><i class="icon-eye"></i></a>
				<strong><?php echo number_format($total_views_count,0,"","."); ?></strong>
			</div>
			<div class="progress progress-micro">
				<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
					<span class="sr-only">100% Complete</span>
				</div>
			</div>
			<span>Total Video Views</span>
		</li>
		<li>
			<div class="statistics-info">
				<a href="javascript:void(0)" style="cursor: default;" class="bg-primary"><i class="icon-eye"></i></a>
				<strong><?php echo number_format($average_views_count,0,"","."); ?></strong>
			</div>
			<div class="progress progress-micro">
				<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
					<span class="sr-only">100% Complete</span>
				</div>
			</div>
			<span>Average Views/Video</span>
		</li>
	</ul>
</div>
<!-- /statistics -->


<div class="row">
	<div class="col-md-12">

        <!-- Simple chart -->
        <div class="panel panel-default">
	        <div class="panel-heading">
		        <h6 class="panel-title"><i class="icon-calendar2"></i> Total Video</h6>
	        </div>
	        <div class="panel-body">
		        <canvas id="line-chart" width="100%" height="30"></canvas>
	        </div>
        </div>
        <!-- /simple chart -->
	</div>

	<div class="col-md-12">
        <!-- Simple chart -->
        <div class="panel panel-default">
	        <div class="panel-heading">
		        <h6 class="panel-title"><i class="icon-calendar2"></i> Total Page Views</h6>
	        </div>
	        <div class="panel-body">
	        	<canvas id="line-chart-2" width="100%" height="30"></canvas>
	        </div>
        </div>
        <!-- /simple chart -->
	</div>

</div>


<div class="panel panel-default">
	<div class="panel-heading">
		<h6 class="panel-title">
			<i class="icon-list"></i>
			Your content drafts
		</h6>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Program</th>
					<th>Category</th>
					<th>Date Created</th>
					<th>Last Update</th>
					<th style="width:100px" class="text-center">Action</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach ($datas as $key => $value) { ?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $value->content_article_title; ?></td>
					<td><?php echo $value->content_program_name; ?></td>
					<td><?php echo $value->content_category_name; ?></td>
					<td><?php echo date('d/m/Y H:i',strtotime($value->content_article_created_at)); ?></td>
					<td><?php echo date('d/m/Y H:i',strtotime($value->content_article_updated_at)); ?></td>
					<td class="well text-center" >

						<a href="<?php echo base_url().'article/edit/'.base64_encode($value->content_article_id); ?>">
						<button  type="button" class="btn btn-info btn-icon">
							<i class="icon-pencil3"></i>
						</button>
						</a>
						<button onclick="deleteData('<?php echo base64_encode($value->content_article_id); ?>',3)" type="button" class="btn btn-danger btn-icon">
							<i class="icon-remove3"></i>
						</button>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<?php if($total_page>1){ ?>
        <div class="well">
            <?php echo $pagination; ?>
        </div>
        <?php } ?>
	</div>

</div>

<script type="text/javascript">
    function deleteData(id, type) {
        var confirm = 'Yes, delete it!';
        if (type == 1) {
            var warn = 'You still can restore this with the restore button!';
        }
        if (type == 2) {
            var warn = "You can't restore this again if you sure to delete this!";
        }
        if (type == 3) {
            var warn = "You can see this content on the list when you sure to restore this!";
            var confirm = 'Yes, restore it!';
        }
        Swal.fire({
            title: 'Are you sure?',
            text: warn,
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: confirm
        }).then((result) => {
            if (result.value) {
                if (type == 1) {
                    window.location.href = "<?php echo base_url('article/delete/tfos/'); ?>"+id;
                }
                if (type == 2) {
                    window.location.href = "<?php echo base_url('article/delete/erup/'); ?>"+id;
                }
                if (type == 3) {
                    window.location.href = "<?php echo base_url('article/delete/erotser/'); ?>"+id;
                }
            }
        })
    }
</script>