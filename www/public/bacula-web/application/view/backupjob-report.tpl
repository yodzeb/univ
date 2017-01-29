{include file=header.tpl}

<div id="nav">
  <ul>
    <li>
      <a class="home" href="index.php" title="{t}Back to the dashboard{/t}">{t}Dashboard{/t}</a>
    </li>
    <li>{t}Backup Job Report{/t}</li>
  </ul>
</div>

<div class="main_center">
  <!-- Backup job informations -->
  <div class="box">
    <table>
	  <tr>
		<td width="150">{t}Backup Job name{/t}:</td>
			<td>{$backupjob_name}</td>
		</tr>
		<tr>
			<td>{t}Period{/t}:</td>
			<td>{$backupjob_period}</td>
		</tr>
		<tr>
			<td>{t}Transfered Bytes{/t}</td>
			<td>{$backupjob_bytes}</td>
		</tr>
		<tr>
			<td>{t}Transfered Files{/t}</td>
			<td>{$backupjob_files}</td>
		</tr>
      </table>
  </div> <!-- end div class=box -->
</div> <!-- end div class=main_center -->
  
<div class="main_center">
  <!-- Last jobs list -->
  <p class="header">{t}Last jobs{/t}</p>
  <div class="box">	
	<table>
		<tr>
			<td class="tbl_header" width="60">{t}Job Id{/t}</td>
			<td class="tbl_header" width="60">{t}Level{/t}</td>
			<td class="tbl_header" width="70">{t}Files{/t}</td>
			<td class="tbl_header" width="70">{t}Bytes{/t}</td>
			<td class="tbl_header" width="80">{t}Start time{/t}</td>
			<td class="tbl_header" width="80">{t}End time{/t}</td>
			<td class="tbl_header" width="80">{t}Elapsed time{/t}</td>
		</tr>
		{foreach from=$jobs item=job}
		<tr>
			<td class="{$job.row_class}">{$job.jobid}</td>
			<td class="{$job.row_class}">{$job.joblevel}</td>
			<td class="{$job.row_class}">{$job.jobfiles}</td>
			<td class="{$job.row_class}">{$job.jobbytes}</td>
			<td class="{$job.row_class}">{$job.starttime}</td>
			<td class="{$job.row_class}">{$job.endtime}</td>
			<td class="{$job.row_class}">{$job.elapsedtime}</td>
		</tr>
		{/foreach}
	</table>
  </div> <!-- end div class=box -->
  
  </div> <!-- end div=main_center -->
  
  <div class="main_center">
    <!-- Transfered Bytes/Files graph -->
	<p class="header">{t}Transfered Bytes / Files{/t}</p>
    <div class="box">
	  <img class="graph" src="{$graph_stored_bytes}" alt="" />
	  <img class="graph" src="{$graph_stored_files}" alt="" />
    </div> <!-- end div class=box -->
</div> <!-- end div id=main_center -->

{include file="footer.tpl"}
