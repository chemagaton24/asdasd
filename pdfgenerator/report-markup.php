<?php include dirname(__FILE__).'/report-style.php'; ?>
<body>
<footer class="footer"><span>SilverSky Proprietary and Confidential</span></footer>
<main class="report__main">
	<div class="report__intro-page">
		<div class="report__intro-bg"></div>
		<div class="report__intro-header">
			<table>
				<tr>
					<td>
						<img src="<?php echo dirname(__FILE__) ?>/assets/logo.png" class="report__intro-header-logo" />
					</td>
					<td>
						<div class="report__intro-header-text">
							Cyber Maturity<br/>
							Assessment Report
						</div>
					</td>
				</tr>
			</table>
		</div>
		<div class="report__intro">
			<div class="report__intro-inner">
				<div class="report__intro-subheading">Prepared for:</div>
				<div class="report__intro-heading">
					Word of Life<br/>
					Fellowship Inc.
				</div>
			</div>
		</div>
		<div class="page__break"></div>
	</div>
	<div class="report__table-of-contents">
		<div class="report__table-of-contents-title">Table of Contents</div>
		<ol class="no-padding">
			<li><strong>Introduction</strong>
				<ol>
					<li>Client Profile</li>
					<li>Executive Summary</li>
				</ol>
			</li>
			<li><strong>Cyber Maturity Assessment</strong>
				<ol>
					<li>Overall CMA Posture</li>
					<li>Maturity Across Cyber Domains</li>
					<li>Maturity Across Core Pillars</li>
				</ol>
			</li>
			<li><strong>Cyber Capability Assessment</strong>
				<ol>
					<li>Identify Capability Assessment</li>
					<li>Protect Capability Assessment</li>
					<li>Detect Capability Assessment</li>
					<li>Respond/Recover Capability Assessment</li>
				</ol>
			</li>
			<li><strong>Summary of Recommended Actions</strong>
				<ol>
					<li>Maturity Improvement Areas</li>
					<li>How SilverSky Can Help</li>
				</ol>
			</li>
		</ol>
		<div class="page__break"></div>
	</div>
	<div class="report__client-profile">
		<div class="report__client-profile__header">
			<div class="report__client-profile__header-heading">Cyber Maturity Assessment</div>
			<div class="report__client-profile__header-sub-heading">1. Introduction</div>
		</div>
		<div class="report__client-profile__table-heading">1.1 User Profile</div>
		<table class="report__client-profile__table">
			<tbody>
				<tr>
					<td class="report__client-profile__table-td-label">First Name</td>
					<td><?php echo $client_profile['first_name']; ?></td>
					<td class="report__client-profile__table-td-label">Last Name</td>
					<td><?php echo $client_profile['last_name']; ?></td>
				</tr>
				<tr>
					<td class="report__client-profile__table-td-label">Email</td>
					<td><?php echo $client_profile['email']; ?></td>
					<td class="report__client-profile__table-td-label">Job Title</td>
					<td><?php echo $client_profile['job_title']; ?></td>
				</tr>
				<tr>
					<td class="report__client-profile__table-td-label">Date of Survey</td>
					<td><?php echo $client_profile['date_of_survey']; ?></td>
					<td class="report__client-profile__table-td-blank" colspan="2"></td>
				</tr>
			</tbody>
		</table>
		<div class="report__client-profile__table-heading">1.1 Company Profile</div>
		<table class="report__client-profile__table">
			<tbody>
				<tr>
					<td class="report__client-profile__table-td-label">Company Name</td>
					<td colspan="3"><?php echo $client_profile['company_name']; ?></td>
				</tr>
				<tr>
					<td class="report__client-profile__table-td-label">Industry</td>
					<td><?php echo $client_profile['industry']; ?></td>
					<td class="report__client-profile__table-td-label">Employee Size</td>
					<td><?php echo $client_profile['employee_size']; ?></td>
				</tr>
			</tbody>
		</table>
		<div class="page__break"></div>
	</div>
	<div class="report__table-of-contents-list">
		<div class="report__table-of-contents-list-root-item">
			<div class="report__table-of-contents-list-root-item-heading">Cyber Maturity Assessment</div>
			<div class="report__table-of-contents-list-root-item-label">1. Introduction</div>
		</div>
		<div class="report__table-of-contents-list-sub-item">
			<div class="report__table-of-contents-list-sub-item-label">
				1.2 Executive Summary
			</div>
			<div class="report__table-of-contents-list-sub-item-blue-text">
				<p>The SilverSky Cybersecurity Assessment is based off a combination of several industry frameworks to provide a simple best
				practice assessment that can measure your cyber program’s maturity. This report helps identify maturity improvement areas and
				provides recommendations to assist your organization in prioritizing risk mitigation improvements. The report also provides insight
				into how your cyber maturity measures up to your industry peers and like sized organizations. The following Executive report
				summarizes the results of your cyber maturity assessment. Detailed sections on these finding below can be found within this
				report.</p>
				<table class="report__table-of-contents-list-sub-item-blue-text-table--executive-summary">
					<tr>
						<td>
							<p>Based on the answers to the SilverSky’s Cyber Assessment your organization falls within the
							of Cyber Security Maturity. This classifies your organizational cyber maturity within the phase of</p>
						</td>
						<td class="report__table-of-contents-list-sub-item-blue-text-table-td-percentie----executive-summary">
							<table class="report__table-of-contents-list-sub-item-blue-text-table--executive-summary-percentile">
								<tr>
									<td><?php echo to_whole_num($overall_cyber_maturity_average) ?>%</td>
									<td>percentile</td>
								</tr>
								<tr>
									<td colspan="2"><span class="ttransform-capitalize"><?php echo $overall_cyber_maturity_average_check ?></span></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
				<p>Evolving maturity is characterized as those organizations that have begun to invested in Cyber security and may show strong
				maturity in one or more cyber domains but are still in need of maturing across multiple cyber domains. </p>
			</div>
			<div class="report__table-of-contents-list-sub-item-label-sub">
				Core Cyber Pillar Assessment
			</div>
			<div class="report__table-of-contents-list-sub-item-blue-text report__table-of-contents-list-sub-item-blue-text--executive-summary">
				<p>The assessment first analyzed your current Cybersecurity program from four (4) critical core functional cyber security pillars.
				These pillars evaluated your organizational capabilities to identify and assess risk, your ability to implement protection controls,
				your ability to detect threats and your ability to respond and recover from an incident.</p>
				<table class="report__table-of-contents-list-sub-item-blue-text-table--executive-summary">
					<tr>
						<td>
							<p>Your organization can gain the most initial maturity improvement impact within the cybersecurity Pillar of</p>
						</td>
						<td class="report__table-of-contents-list-sub-item-blue-text-table-td-percentie----executive-summary">
							<table class="report__table-of-contents-list-sub-item-blue-text-table--executive-summary-percentile">
								<tr>
									<td><span class="ttransform-capitalize"><?php echo $maturity_across_core_functional_areas['lowest_by_key'] ?></span></td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
			<div class="report__table-of-contents-list-sub-item-label-sub">
				Cyber Domain Maturity Assessment
			</div>
			<div class="report__table-of-contents-list-sub-item-blue-text">
				<p>As a second phase of the assessment, SilverSky went a level deeper to measure your organization’s cyber maturity across
				fourteen (14) common cyber security domains that fall within these four critical core (4) functional cyber security pillars. As a result
				of this assessment SilverSky identified the top 5 cyber domains that your should invest in to enhance your cyber maturity. Those
				domains are listed in order of importance from most significant.</p>
			</div>
			<table class="report__table-of-contents-list-sub-item--cyber-domain-maturity-assessment-table">
				<thead>
					<tr>
						<th>Top Domains to Mature</th>
						<th>Current Maturity Level</th>
						<th>Maturity Score</th>
					</tr>
				</thead>
				<tbody>
					<?php $count = 1; ?>
					<?php foreach ($domains_data as $key => $data): ?>
					<?php if(to_whole_num($data['value']) <= 33 && $count <= 5): ?>
					<tr>
						<td><?php echo $data['label'] ?></td>
						<td><?php echo getCapabilityByLabel($data['value']) ?></td>
						<td><?php echo to_whole_num($data['value']) ?>%</td>
					</tr>
					<?php $count++ ?>
					<?php endif ?>
					<?php endforeach ?>
				</tbody>
			</table>
			<div class="report__table-of-contents-list-sub-item-label-sub">
				SilverSky Service Recommendations
			</div>
			<div class="report__table-of-contents-list-sub-item-blue-text">
				<p>Lastly, SilverSky has compiled a list of services that SilverSky provides that maps to your areas of maturity improvement. This list
				can be used as a strategic roadmap or solutions you should consider to help increase your oranizational Cyber Maturity.</p>
			</div>
			<table class="report__table-of-contents-list-sub-item--silversky-service-recommendations-table">
				<thead>
					<tr>
						<th>Top Domains to Mature</th>
						<th>SilverSky Recommended Services</th>
					</tr>
				</thead>
				<tbody>
					<?php $count = 1; ?>
					<?php foreach ($domains_data as $key => $data): ?>
					<?php if(to_whole_num($data['value']) <= 33 && $count <= 5): ?>
					<tr>
						<td><?php echo $data['label'] ?></td>
						<td><?php echo $data['match_service'] ?></td>
					</tr>
					<?php $count++ ?>
					<?php endif ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
		<div class="page__break"></div>
		<div class="report__table-of-contents-list-root-item">
			<div class="report__table-of-contents-list-root-item-heading">Cyber Maturity Assessment</div>
			<div class="report__table-of-contents-list-root-item-label">2. Cyber Maturity Assessment</div>
		</div>
		<div class="report__table-of-contents-list-sub-item">
			<div class="report__table-of-contents-list-sub-item-label">
				2.1 Overall Cyber Maturity Posture
			</div>
			<div class="report__table-of-contents-list-sub-item-blue-text talign-center">
				<p>Based on the answers to the SilverSky’s Cyber Assessment your organization’s cyber maturity falls within the:</p>
			</div>
			<div class="report__table-of-contents-list-sub-item-grey-text talign-center">
				<h4><?php echo to_whole_num($overall_cyber_maturity_average) ?>%</h4>
			</div>
			<div class="report__table-of-contents-list-sub-item-blue-text talign-center">
				<p>percentile, which classifies your organizational cyber maturity within category of</p>
			</div>
			<div class="report__table-of-contents-list-sub-item-grey-text talign-center">
				<h4 class="ttransform-capitalize"><?php echo $overall_cyber_maturity_average_check ?></h4>
			</div>
			<div class="report__table-of-contents-list-sub-item-chart">
				<img src="<?php echo dirname(__FILE__) ?>/charts/overall-cyber-maturity.png" />
			</div>
			<table class="report__overall-cyber-maturity-posture__table">
				<tbody>
					<tr class="report__overall-cyber-maturity-posture__table__tr--baseline">
						<td>Baseline</td>
						<td>Baseline maturity is characterized as those organizations meeting minimum expectations recommended by best practice security, industry frameworks and regulations. </td>
						<td><?php if($overall_cyber_maturity_average_check == 'baseline'): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
					<tr class="report__overall-cyber-maturity-posture__table__tr--evolving">
						<td>Evolving</td>
						<td>Evolving maturity is characterized as those organizations that have begun to invested in Cyber security and may show strong maturity in one or more cyber domains but are still in need of maturing across multiple cyber domains. </td>
						<td><?php if($overall_cyber_maturity_average_check == 'evolving'): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
					<tr class="report__overall-cyber-maturity-posture__table__tr--intermediate">
						<td>Intermediate</td>
						<td>Intermediate maturity is characterized as those organizations that have started their cyber journey by building solid maturity across multiple cyber domains but may be lacking maturity in a few cyber domains.</td>
						<td><?php if($overall_cyber_maturity_average_check == 'intermediate'): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
					<tr class="report__overall-cyber-maturity-posture__table__tr--advance">
						<td>Advance</td>
						<td>Advanced maturity is characterized as those organizations that have committed to building a comprehensive cyber program and show solid maturity across all cyber domains but may be lacking maturity in a one or more cyber domains.</td>
						<td><?php if($overall_cyber_maturity_average_check == 'advance'): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
					<tr class="report__overall-cyber-maturity-posture__table__tr--invested">
						<td>Invested</td>
						<td>Invested maturity is characterized as those organizations that have a strong commitment to cyber security and have invested in the people, processes and technologies to show comprehensive cyber maturity in all assessed cyber domains.</td>
						<td><?php if($overall_cyber_maturity_average_check == 'invested'): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="page__break"></div>
		<div class="report__table-of-contents-list-root-item">
			<div class="report__table-of-contents-list-root-item-heading">Cyber Maturity Assessment</div>
			<div class="report__table-of-contents-list-root-item-label">2. Cyber Maturity Assessment</div>
		</div>
		<div class="report__table-of-contents-list-sub-item">
			<div class="report__table-of-contents-list-sub-item-label">
				2.2 Maturity Across Core Functional Areas
			</div>
			<div class="report__table-of-contents-list-sub-item-blue-text">
				<p>The core functional assessment looks at your organizational cyber maturity across four (4) functional areas that help make up a cyber program.
				Those functional areas are comprised of the Identify, Protect, Detect and Response/Recovery phases of a cyber program. These four
				functions, when combined, provide the key program areas for building out a comprehensive cyber program.</p>
				<ul>
					<li><strong>Identify</strong> – Assessment of the Organization’s ability to develop, understand and manage cyber security risk</li>
					<li><strong>Protect</strong> - Assessment of the Organization’s ability to develop and implement appropriate safeguards to ensure</li>
					<li><strong>Detect</strong> – Assessment of the Organization’s ability to develop processes to identify the occurrence of a cybersecurity event</li>
					<li><strong>Respond/Recover</strong> - Assessment of the Organization’s ability to develop processes to take action and restore from a cybersecurity event</li>
				</ul>
			</div>
			<div class="report__table-of-contents-list-sub-item-light-blue-text">
				<p>Based on the results of SilverSky’s assessment the following chart displays your current maturity across these four functional areas from least
				mature to most mature. Your organization’s biggest opportunity for increasing cyber maturity is within the functional pillar of:</p>
			</div>
			<div class="report__table-of-contents-list-sub-item-chart">
				<img src="<?php echo dirname(__FILE__) ?>/charts/maturity-by-domain.png" />
			</div><br/>
			<table class="report__maturity-across-core-functional-areas__table">
				<tbody>
					<tr>
						<td>Your organization’s biggest opportunity for increasing cyber maturity is within the functional pillar of:</td>
						<td><span class="ttransform-capitalize"><?php echo $maturity_across_core_functional_areas['lowest_by_key'] ?></span></td>
						<td><?php echo to_whole_num($maturity_across_core_functional_areas['lowest_by_value']) ?>%</td>
					</tr>
				</tbody>
				<thead>
					<tr>
						<th>Functional Pillar</th>
						<th>Cyber Maturity Score</th>
						<th>Improvement Priority</th>
					</tr>
				</thead>
				<tbody>
					<tr class="report__maturity-across-core-functional-areas__table-tr--identify">
						<td>Identify</td>
						<td><?php echo to_whole_num($maturity_across_core_functional_areas['identify']) ?>%</td>
						<td><?php echo getCapabilityByLabelReverse($maturity_across_core_functional_areas['identify']) ?></td>
					</tr>
					<tr class="report__maturity-across-core-functional-areas__table-tr--protect">
						<td>Protect</td>
						<td><?php echo to_whole_num($maturity_across_core_functional_areas['protect']) ?>%</td>
						<td><?php echo getCapabilityByLabelReverse($maturity_across_core_functional_areas['protect']) ?></td>
					</tr>
					<tr class="report__maturity-across-core-functional-areas__table-tr--detect">
						<td>Detect</td>
						<td><?php echo to_whole_num($maturity_across_core_functional_areas['detect']) ?>%</td>
						<td><?php echo getCapabilityByLabelReverse($maturity_across_core_functional_areas['detect']) ?></td>
					</tr>
					<tr class="report__maturity-across-core-functional-areas__table-tr--respond-recover">
						<td>Respond/Recover</td>
						<td><?php echo to_whole_num($maturity_across_core_functional_areas['respond-recover']) ?>%</td>
						<td><?php echo getCapabilityByLabelReverse($maturity_across_core_functional_areas['respond-recover']) ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="page__break"></div>
		<div class="report__table-of-contents-list-root-item">
			<div class="report__table-of-contents-list-root-item-heading">Cyber Maturity Assessment</div>
			<div class="report__table-of-contents-list-root-item-label">2. Cyber Maturity Assessment</div>
		</div>
		<div class="report__table-of-contents-list-sub-item">
			<div class="report__table-of-contents-list-sub-item-label">
				2.3 Maturity Across Cyber Domains
			</div>
			<div class="report__table-of-contents-list-sub-item-blue-text">
				<br/><br/>
				<p>Below is a single view of all capabilities covered in this assessment and their results. SilverSky measured your organization’s
				<p>cyber maturity across fourteen (14) common domains and four (4) key pillars or functions.</p>
				The questions represented in this survey are SilverSky’s representation of best practices relating to each of these domains and
				pillars and will assist in providing strategic guidance on where to focus time and energy in building additional cyber capabilities.
				The red color in the chart represents areas of low or no maturity, orange represents areas where some or weak maturity exists
				and green reresents areas of hightened maturity.</p>
				<br/><br/><br/>
			</div>
			<table class="report__maturity-across-cyber-domains__table">
				<tbody class="report__maturity-across-cyber-domains__table--identify">
					<tr>
						<td rowspan="4" class="report__maturity-across-cyber-domains__table-category"><span>Identify</span></td>
						<td>Oversight</td>
						<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($maturity_across_cyber_domains['oversight']['identify']) ?>"><?php echo to_whole_num($maturity_across_cyber_domains['oversight']['identify']) ?>%</td>
					</tr>
					<tr>
						<td>IT Asset Management</td>
						<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($maturity_across_cyber_domains['it_asset_management']['identify']) ?>"><?php echo to_whole_num($maturity_across_cyber_domains['it_asset_management']['identify']) ?>%</td>
					</tr>
					<tr>
						<td>Risk Assessment</td>
						<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($maturity_across_cyber_domains['risk_assessment']['identify']) ?>"><?php echo to_whole_num($maturity_across_cyber_domains['risk_assessment']['identify']) ?>%</td>
					</tr>
					<tr>
						<td>Third Party Risk</td>
						<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($maturity_across_cyber_domains['third_party_risk']['identify']) ?>"><?php echo to_whole_num($maturity_across_cyber_domains['third_party_risk']['identify']) ?>%</td>
					</tr>
				</tbody>
				<tbody class="report__maturity-across-cyber-domains__table--protect">
					<tr>
						<td rowspan="3" class="report__maturity-across-cyber-domains__table-category"><span>Protect</span></td>
						<td>Training/Culture</td>
						<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($maturity_across_cyber_domains['training_culture']['protect']) ?>"><?php echo to_whole_num($maturity_across_cyber_domains['training_culture']['protect']) ?>%</td>
					</tr>
					<tr>
						<td>Infrastructure Management</td>
						<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($maturity_across_cyber_domains['infrastructure_management']['protect']) ?>"><?php echo to_whole_num($maturity_across_cyber_domains['infrastructure_management']['protect']) ?>%</td>
					</tr>
					<tr>
						<td>Patch Management</td>
						<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($maturity_across_cyber_domains['patch_management']['protect']) ?>"><?php echo to_whole_num($maturity_across_cyber_domains['patch_management']['protect']) ?>%</td>
					</tr>
				</tbody>
				<tbody class="report__maturity-across-cyber-domains__table--detect">
					<tr>
						<td rowspan="4" class="report__maturity-across-cyber-domains__table-category"><span>Detect</span></td>
						<td>Threat Intelligence and Information</td>
						<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($maturity_across_cyber_domains['threat_intelligence_and_information']['detect']) ?>"><?php echo to_whole_num($maturity_across_cyber_domains['threat_intelligence_and_information']['detect']) ?>%</td>
					</tr>
					<tr>
						<td>Monitoring and Analyzing</td>
						<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($maturity_across_cyber_domains['monitoring_and_analysis']['detect']) ?>"><?php echo to_whole_num($maturity_across_cyber_domains['monitoring_and_analysis']['detect']) ?>%</td>
					</tr>
					<tr>
						<td>Threat and Vulnerability Detection</th>
						<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($maturity_across_cyber_domains['threat_and_vulnerability_detection']['detect']) ?>"><?php echo to_whole_num($maturity_across_cyber_domains['threat_and_vulnerability_detection']['detect']) ?>%</td>
					</tr>
					<tr>
						<td>Event Detection</td>
						<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($maturity_across_cyber_domains['event_detection']['detect']) ?>"><?php echo to_whole_num($maturity_across_cyber_domains['event_detection']['detect']) ?>%</td>
					</tr>
				</tbody>
				<tbody class="report__maturity-across-cyber-domains__table--respond-recover">
					<tr>
						<td rowspan="3" class="report__maturity-across-cyber-domains__table-category">
							<span>Respond &<br/>Recover</span>
						</td>
						<td>Planning</td>
						<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($maturity_across_cyber_domains['response_planning']['respond']) ?>"><?php echo to_whole_num($maturity_across_cyber_domains['response_planning']['respond']) ?>%</td>
					</tr>
					<tr>
						<td>Testing</td>
						<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($maturity_across_cyber_domains['response_testing']['respond']) ?>"><?php echo to_whole_num($maturity_across_cyber_domains['response_testing']['respond']) ?>%</td>
					</tr>
					<tr>
						<td>Mitigation and Recovery</td>
						<td class="report__maturity-across-cyber-domains__table-value report__maturity-across-cyber-domains__table-value--<?php echo val_class_range($maturity_across_cyber_domains['mitigation_and_recovery']['respond']) ?>"><?php echo to_whole_num($maturity_across_cyber_domains['mitigation_and_recovery']['respond']) ?>%</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="page__break"></div>
		<div class="report__table-of-contents-list-root-item">
			<div class="report__table-of-contents-list-root-item-heading">Cyber Maturity Assessment</div>
			<div class="report__table-of-contents-list-root-item-label">3. Cyber Capability Assessment</div>
		</div>
		<div class="report__table-of-contents-list-sub-item">
			<div class="report__table-of-contents-list-sub-item-label">
				3.1 Identify
			</div>
			<table class="report__table-of-contents-list-sub-item-capability-table">
				<tr>
					<td>During the assessment your organization showed a maturity score within the Identify
					functional cyber capability area of:</td>
					<td><?php echo to_whole_num($maturity_across_core_functional_areas['identify']) ?>%</td>
				</tr>
			</table>
			<div class="report__table-of-contents-list-sub-item-label-sub">
				Why is the Identify Functional Program Area important to a cyber program?
			</div>
			<div class="report__table-of-contents-list-sub-item-blue-text">
				<p>The Identify capability in cybersecurity is ciritical to development of an organization's understanding of cybersecurity risks to systems, people,
				assets, data, and capabilities. Understanding the business context, the resources that support critical functions, and the related cybersecurity
				risks enables an organization to focus and prioritize its efforts, consistent with its risk management strategy and business needs.</p>
			</div>
			<div class="report__table-of-contents-list-sub-item-label-sub">
				The Identify Category is comprised of four domains as part of SilverSky’s cyber maturity assessment:
			</div>
			<div class="report__table-of-contents-list-sub-item-light-blue-text">
				<br/><br/>
				<strong>Oversight</strong>
				Measures if proper structure is in place including people, policies, procedures, and processes to manage and monitor the organization’s
				regulatory, legal, risk, environmental, and operational requirements.<br/><br/>
				<strong>Asset Management</strong>
				Measures the organizational process that exists to identify and manage the devices and systems that enable the organization to achieve
				business purposes are identified and managed consistent with their relative importance to organizational objectives and the organization’s risk
				strategy.<br/><br/>
				<strong>Risk Assessment</strong>
				Measures if the organization understands the cybersecurity risks to organizational operations (including mission, functions, image, or reputation),
				organizational assets, and individuals.<br/><br/>
				<strong>Third Party Risk</strong>
				Measures the organizational maturity around its third party and supply chain risk management processes.
				<br/><br/><br/>
			</div>
			<table class="report__cyber-program-assessment__table">
				<thead>
					<tr>
						<th rowspan="2">Capability</th>
						<th colspan="5">Capability Level</th>
					</tr>
					<tr class="report__cyber-program-assessment__table-tr--value-heading">
						<th>Very Low</th>
						<th>Low</th>
						<th>Medium</th>
						<th>High</th>
						<th>Very High</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Oversight</td>
						<td><?php if(getCapability($maturity_across_cyber_domains['oversight']['identify']) == 1): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['oversight']['identify']) == 2): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['oversight']['identify']) == 3): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['oversight']['identify']) == 4): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['oversight']['identify']) == 5): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
					<tr>
						<td>IT Asset Management</td>
						<td><?php if(getCapability($maturity_across_cyber_domains['it_asset_management']['identify']) == 1): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['it_asset_management']['identify']) == 2): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['it_asset_management']['identify']) == 3): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['it_asset_management']['identify']) == 4): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['it_asset_management']['identify']) == 5): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
					<tr>
						<td>Risk Assessment</td>
						<td><?php if(getCapability($maturity_across_cyber_domains['risk_assessment']['identify']) == 1): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['risk_assessment']['identify']) == 2): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['risk_assessment']['identify']) == 3): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['risk_assessment']['identify']) == 4): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['risk_assessment']['identify']) == 5): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
					<tr>
						<td>Third Party Risk</td>
						<td><?php if(getCapability($maturity_across_cyber_domains['third_party_risk']['identify']) == 1): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['third_party_risk']['identify']) == 2): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['third_party_risk']['identify']) == 3): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['third_party_risk']['identify']) == 4): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['third_party_risk']['identify']) == 5): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="page__break"></div>
		<div class="report__table-of-contents-list-root-item">
			<div class="report__table-of-contents-list-root-item-heading">Cyber Maturity Assessment</div>
			<div class="report__table-of-contents-list-root-item-label">3. Cyber Capability Assessment</div>
		</div>
		<div class="report__table-of-contents-list-sub-item">
			<div class="report__table-of-contents-list-sub-item-label">
				3.2 Protect
			</div>
			<table class="report__table-of-contents-list-sub-item-capability-table">
				<tr>
					<td>During the assessment your organization showed a maturity score within the Protect
					functional cyber capability area of:</td>
					<td><?php echo to_whole_num($maturity_across_core_functional_areas['protect']) ?>%</td>
				</tr>
			</table>
			<div class="report__table-of-contents-list-sub-item-label-sub">
				Why is the Protect Functional Program Area important to a cyber program?
			</div>
			<div class="report__table-of-contents-list-sub-item-blue-text">
				<p>The protect capability area is a critical component of a cyber program because it measures the organizations ability to proactively protect
				organizational assests from cyber attacks on critical infrastructure. The protect function measures the orginazational ability to limit or contain the
				impact of a potential cybersecurity event by having proactive measures in place.</p>
			</div>
			<div class="report__table-of-contents-list-sub-item-label-sub">
				The Identify Category is comprised of four domains as part of SilverSky’s cyber maturity assessment:
			</div>
			<div class="report__table-of-contents-list-sub-item-light-blue-text">
				<br/><br/>
				<strong>Training/Culture</strong>
				Measures the organization’s maturity around providing personnel and partners cybersecurity awareness education and testing to enforce their
				duties and responsibilities consistent with related policies, procedures, and agreements.<br/><br/>
				<strong>Infrastructure Management</strong>
				Measures the organization’s maturity around the ability to manage and maintain information system components consistent with policies and
				procedures.<br/><br/>
				<strong>Patch Management</strong>
				Measures the organization's ability to patch systems from potential threats and vulnerabilities that can expose systems to comprimise.
				<br/><br/><br/>
			</div>
			<table class="report__cyber-program-assessment__table">
				<thead>
					<tr>
						<th rowspan="2">CAPABILITY</th>
						<th colspan="5">CAPABILITY LEVEL</th>
					</tr>
					<tr class="report__cyber-program-assessment__table-tr--value-heading">
						<th>VERY LOW</th>
						<th>LOW</th>
						<th>MEDIUM</th>
						<th>HIGH</th>
						<th>VERY HIGH</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Training/Culture</td>
						<td><?php if(getCapability($maturity_across_cyber_domains['training_culture']['protect']) == 1): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['training_culture']['protect']) == 2): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['training_culture']['protect']) == 3): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['training_culture']['protect']) == 4): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['training_culture']['protect']) == 5): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
					<tr>
						<td>Infrastructure Management </td>
						<td><?php if(getCapability($maturity_across_cyber_domains['infrastructure_management']['protect']) == 1): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['infrastructure_management']['protect']) == 2): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['infrastructure_management']['protect']) == 3): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['infrastructure_management']['protect']) == 4): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['infrastructure_management']['protect']) == 5): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
					<tr>
						<td>Patch Management</td>
						<td><?php if(getCapability($maturity_across_cyber_domains['patch_management']['protect']) == 1): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['patch_management']['protect']) == 2): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['patch_management']['protect']) == 3): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['patch_management']['protect']) == 4): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['patch_management']['protect']) == 5): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="page__break"></div>
		<div class="report__table-of-contents-list-root-item">
			<div class="report__table-of-contents-list-root-item-heading">Cyber Maturity Assessment</div>
			<div class="report__table-of-contents-list-root-item-label">3. Cyber Capability Assessment</div>
		</div>
		<div class="report__table-of-contents-list-sub-item">
			<div class="report__table-of-contents-list-sub-item-label">
				3.3 Detect
			</div>
			<table class="report__table-of-contents-list-sub-item-capability-table">
				<tr>
					<td>During the assessment your organization showed a maturity score within the Detect
					functional cyber capability area of:</td>
					<td><?php echo to_whole_num($maturity_across_core_functional_areas['detect']) ?>%</td>
				</tr>
			</table>
			<div class="report__table-of-contents-list-sub-item-label-sub">
				Why is the Detect Functional Program Area important to a cyber program?
			</div>
			<div class="report__table-of-contents-list-sub-item-blue-text">
				<p>The Detect Function is critical to a cyber security program since it involves the processes and procedure necessary to timely discover
				cybersecurity events within a organization. The quicker potential issues are detected will drastically reduce the overall impact a cyber event will
				have across an organization.</p>
			</div>
			<div class="report__table-of-contents-list-sub-item-label-sub">
				The Detect Category is comprised of four domains as part of SilverSky’s cyber maturity assessment:
			</div>
			<div class="report__table-of-contents-list-sub-item-light-blue-text">
				<br/><br/>
				<strong>Threat Intelligence and Information</strong>
				Measures how well an organization can acquire and analyze information to identify, track, and predict cyber capabilities, intentions, and activities<br/><br/>
				<strong>Monitoring and Analyzing</strong>
				Measures how well your information system and assets are monitored to identify cybersecurity events and verify the effectiveness of protective
				measures<br/><br/>
				<strong>Threat and Vulnerability Detection</strong>
				Measures an organizations ability to detect and eradicate threats and vulnerabilities within their environment.<br/><br/>
				<strong>Event Detection</strong>
				Measures an organizations ability to detect malicious activity within their networks.
				<br/><br/><br/>
			</div>
			<table class="report__cyber-program-assessment__table">
				<thead>
					<tr>
						<th rowspan="2">CAPABILITY</th>
						<th colspan="5">CAPABILITY LEVEL</th>
					</tr>
					<tr class="report__cyber-program-assessment__table-tr--value-heading">
						<th>VERY LOW</th>
						<th>LOW</th>
						<th>MEDIUM</th>
						<th>HIGH</th>
						<th>VERY HIGH</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Threat Intelligence and Information</td>
						<td><?php if(getCapability($maturity_across_cyber_domains['threat_intelligence_and_information']['detect']) == 1): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['threat_intelligence_and_information']['detect']) == 2): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['threat_intelligence_and_information']['detect']) == 3): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['threat_intelligence_and_information']['detect']) == 4): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['threat_intelligence_and_information']['detect']) == 5): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
					<tr>
						<td>Monitoring and Analyzing</td>
						<td><?php if(getCapability($maturity_across_cyber_domains['monitoring_and_analysis']['detect']) == 1): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['monitoring_and_analysis']['detect']) == 2): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['monitoring_and_analysis']['detect']) == 3): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['monitoring_and_analysis']['detect']) == 4): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['monitoring_and_analysis']['detect']) == 5): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
					<tr>
						<td>Threat and Vulnerability Detection</td>
						<td><?php if(getCapability($maturity_across_cyber_domains['threat_and_vulnerability_detection']['detect']) == 1): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['threat_and_vulnerability_detection']['detect']) == 2): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['threat_and_vulnerability_detection']['detect']) == 3): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['threat_and_vulnerability_detection']['detect']) == 4): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['threat_and_vulnerability_detection']['detect']) == 5): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
					<tr>
						<td>Event Detection</td>
						<td><?php if(getCapability($maturity_across_cyber_domains['event_detection']['detect']) == 1): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['event_detection']['detect']) == 2): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['event_detection']['detect']) == 3): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['event_detection']['detect']) == 4): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['event_detection']['detect']) == 5): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="page__break"></div>
		<div class="report__table-of-contents-list-root-item">
			<div class="report__table-of-contents-list-root-item-heading">Cyber Maturity Assessment</div>
			<div class="report__table-of-contents-list-root-item-label">3. Cyber Capability Assessment</div>
		</div>
		<div class="report__table-of-contents-list-sub-item">
			<div class="report__table-of-contents-list-sub-item-label">
				3.4 Respond and Recover
			</div>
			<table class="report__table-of-contents-list-sub-item-capability-table">
				<tr>
					<td>During the assessment your organization showed a maturity score within the
					Response and Recover functional cyber capability areas of:</td>
					<td><?php echo to_whole_num($maturity_across_core_functional_areas['respond-recover']) ?>%</td>
				</tr>
			</table>
			<div class="report__table-of-contents-list-sub-item-label-sub">
				Why is the Response and Recovery Functional Program Area important to a cyber program?
			</div>
			<div class="report__table-of-contents-list-sub-item-blue-text">
				<p>The response and recover elements play a key role in a cyber program. The Respond capability ensure organizations have implemented the
				appropriate procedure that will allow them to take action regarding a detected cybersecurity incident. While the Recover Function examines
				the organizations capability to resume operations after a potential cybersecurity incident.</p>
			</div>
			<div class="report__table-of-contents-list-sub-item-label-sub">
				The Respond and Recovery Categories are comprised of three domains as part of SilverSky’s cyber maturity assessment:
			</div>
			<div class="report__table-of-contents-list-sub-item-light-blue-text">
				<br/><br/>
				<strong>Response Planning</strong>
				Measures the organizational maturity around how response processes and procedures are executed and maintained, to ensure response to
				detected cybersecurity incidents.<br/><br/>
				<strong>Testing</strong>
				Measures the organizational readiness to handle an incident through its ability to communicate and test their incident response processes.<br/><br/>
				<strong>Response and Mitigation</strong>
				Measures the organizational capability to prevent expansion of an event, mitigate its effects, and resolve the incident.
				<br/><br/><br/>
			</div>
			<table class="report__cyber-program-assessment__table">
				<thead>
					<tr>
						<th rowspan="2">CAPABILITY</th>
						<th colspan="5">CAPABILITY LEVEL</th>
					</tr>
					<tr class="report__cyber-program-assessment__table-tr--value-heading">
						<th>VERY LOW</th>
						<th>LOW</th>
						<th>MEDIUM</th>
						<th>HIGH</th>
						<th>VERY HIGH</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Response Planning</td>
						<td><?php if(getCapability($maturity_across_cyber_domains['response_planning']['respond']) == 1): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['response_planning']['respond']) == 2): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['response_planning']['respond']) == 3): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['response_planning']['respond']) == 4): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['response_planning']['respond']) == 5): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
					<tr>
						<td>Testing</td>
						<td><?php if(getCapability($maturity_across_cyber_domains['response_testing']['respond']) == 1): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['response_testing']['respond']) == 2): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['response_testing']['respond']) == 3): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['response_testing']['respond']) == 4): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['response_testing']['respond']) == 5): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
					<tr>
						<td>Response and Mitigation</td>
						<td><?php if(getCapability($maturity_across_cyber_domains['mitigation_and_recovery']['respond']) == 1): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['mitigation_and_recovery']['respond']) == 2): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['mitigation_and_recovery']['respond']) == 3): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['mitigation_and_recovery']['respond']) == 4): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
						<td><?php if(getCapability($maturity_across_cyber_domains['mitigation_and_recovery']['respond']) == 5): ?><img src="<?php echo dirname(__FILE__) ?>/assets/x.png" width="16" /><?php endif; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="page__break"></div>
		<div class="report__table-of-contents-list-root-item">
			<div class="report__table-of-contents-list-root-item-heading">Cyber Maturity Assessment</div>
			<div class="report__table-of-contents-list-root-item-label">4. Summary of Recommeded Actions</div>
		</div>
		<div class="report__table-of-contents-list-sub-item">
			<div class="report__table-of-contents-list-sub-item-label">
				4.1 Maturity Improvement Areas
			</div>
			<div class="report__table-of-contents-list-sub-item-blue-text">
				<p>Based on the results of the assessment, your organization would experience the highest level of Cyber maturity growth by focusing on the following cyber domains:</p>
			</div>
			<table class="report__summary-of-recommeded-actions__table report__summary-of-recommeded-actions__table--maturity-improvement-areas">
				<thead>
					<tr>
						<th>Priority</th>
						<th>Current Maturity</th>
						<th>Maturity Score</th>
						<th>Domain</th>
						<th>Why is it Important to Cyber?</th>
					</tr>
				</thead>
				<tbody>
					<?php $count = 1; ?>
					<?php foreach ($domains_data as $key => $data): ?>
					<?php if(to_whole_num($data['value']) <= 33): ?>
					<tr>
						<td><?php echo $count ?></td>
						<td><?php echo getCapabilityByLabel($data['value']) ?></td>
						<td><?php echo to_whole_num($data['value']) ?>%</td>
						<td><?php echo $data['label'] ?></td>
						<td><?php echo $domains_data[$key]['why_is_it_important'] ?></td>
					</tr>
					<?php $count++ ?>
					<?php endif ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
		<div class="page__break"></div>
		<div class="report__table-of-contents-list-root-item">
			<div class="report__table-of-contents-list-root-item-heading">Cyber Maturity Assessment</div>
			<div class="report__table-of-contents-list-root-item-label">4. Summary of Recommeded Actions</div>
		</div>
		<div class="report__table-of-contents-list-sub-item">
			<div class="report__table-of-contents-list-sub-item-label">
				4.2 How SilverSky Can Help
			</div>
			<div class="report__table-of-contents-list-sub-item-blue-text">
				<p>Based on your top maturity improvement areas, SilverSky has generated a list of the top service offerings that we offer that would help you enhance your CyberMaturity. These recommendations are list in the order of important to your cyber program.</p>
			</div>
			<table class="report__summary-of-recommeded-actions__table report__summary-of-recommeded-actions__table--how-can-we-help">
				<thead>
					<tr>
						<th>Priority</th>
						<th>Improvement Domain</th>
						<th>Matching SilverSky Services</th>
						<th>How Theses Service Helps Improve Maturity</th>
					</tr>
				</thead>
				<tbody>
					<?php $count = 1; ?>
					<?php foreach ($domains_data as $key => $data): ?>
					<?php if(to_whole_num($data['value']) <= 33): ?>
					<tr>
						<td><?php echo $count ?></td>
						<td><?php echo $data['label'] ?></td>
						<td><?php echo $data['match_service'] ?></td>
						<td><?php echo $domains_data[$key]['how_can_we_help'] ?></td>
					</tr>
					<?php $count++ ?>
					<?php endif ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</main>
</body>