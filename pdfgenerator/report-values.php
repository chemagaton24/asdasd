<?php
$q1 = 0;
$q2 = 0;
$q3 = 0;
$q4 = 0;
$q5 = 1;
$q6 = 1;
$q7 = 0;
$q8 = 1;
$q9 = 0;
$q10 = 0;
$q11 = 1;
$q12 = 1;
$q13 = 0;
$q14 = 1;
$q15 = 1;
$q16 = 0;
$q17 = 0;
$q18 = 1;
$q19 = 1;
$q20 = 0;
$q21 = 1;
$q22 = 0;
$q23 = 1;
$q24 = 1;
$q25 = 0;
$q26 = 1;
$q27 = 1;
$q28 = 1;
$q29 = 1;
$q30 = 0;
$q31 = 1;
$q32 = 0;
$q33 = 0;
$q34 = 0;
$q35 = 0;
$q36 = 1;
$q37 = 1;
$q38 = 0;
$q39 = 0;
$q40 = 0;
$q41 = 1;
$q42 = 0;
$q43 = 1;
$q44 = 1;
$q45 = 1;
$q46 = 1;
$q47 = 0;
$q48 = 1;
$q49 = 1;
$q50 = 1;
$q51 = 1;
$q52 = 0;
$q53 = 1;
$q54 = 0;
$q55 = 0;

$client_profile['first_name'] = 'Matt';
$client_profile['last_name'] = 'Hager';
$client_profile['email'] = 'matth@wol.org';
$client_profile['job_title'] = 'Director of IT';
$client_profile['date_of_survey'] = '7/26/2023';
$client_profile['company_name'] = 'Word of Life Fellowship Inc.';
$client_profile['industry'] = 'Education';
$client_profile['employee_size'] = '251-500';

//Maturity Across Cyber Domains
$maturity_across_cyber_domains['oversight']['identify'] = ($q1 + $q2 + $q3 + $q4) / 4;
$maturity_across_cyber_domains['it_asset_management']['identify'] = ($q5 + $q6 + $q7 + $q8) / 4;
$maturity_across_cyber_domains['risk_assessment']['identify'] = ($q9 + $q10 + $q11) / 3;
$maturity_across_cyber_domains['third_party_risk']['identify'] = ($q42 + $q43 + $q44 + $q45) / 4;
$maturity_across_cyber_domains['training_culture']['protect'] = ($q12 + $q13 + $q14 + $q15) / 4;
$maturity_across_cyber_domains['infrastructure_management']['protect'] = ($q23 + $q24 + $q25 + $q26 + $q27 + $q27) / 6;
$maturity_across_cyber_domains['patch_management']['protect'] = ($q39 + $q40 + $q41) / 3;
$maturity_across_cyber_domains['threat_intelligence_and_information']['detect'] = ($q16 + $q17 + $q18) / 3;
$maturity_across_cyber_domains['monitoring_and_analysis']['detect'] = ($q19 + $q20 + $q21 + $q22) / 4;
$maturity_across_cyber_domains['threat_and_vulnerability_detection']['detect'] = ($q29 + $q30 + $q31 + $q32 + $q33) / 5;
$maturity_across_cyber_domains['event_detection']['detect'] = ($q34 + $q35 + $q36 + $q37 + $q38) / 5;
$maturity_across_cyber_domains['response_planning']['respond'] = ($q46 + $q47 + $q48 + $q49 + $q50) / 5;
$maturity_across_cyber_domains['response_testing']['respond'] = ($q51 + $q52 + $q53) / 3;
$maturity_across_cyber_domains['mitigation_and_recovery']['respond'] = ($q54 + $q55) / 2;

//Overall Cyber Maturity Average
$overall_cyber_maturity_average = round(($maturity_across_cyber_domains['oversight']['identify'] +
$maturity_across_cyber_domains['it_asset_management']['identify'] +
$maturity_across_cyber_domains['risk_assessment']['identify'] +
$maturity_across_cyber_domains['third_party_risk']['identify'] +
$maturity_across_cyber_domains['training_culture']['protect'] +
$maturity_across_cyber_domains['infrastructure_management']['protect'] +
$maturity_across_cyber_domains['patch_management']['protect'] +
$maturity_across_cyber_domains['threat_intelligence_and_information']['detect'] +
$maturity_across_cyber_domains['monitoring_and_analysis']['detect'] +
$maturity_across_cyber_domains['threat_and_vulnerability_detection']['detect'] +
$maturity_across_cyber_domains['event_detection']['detect'] +
$maturity_across_cyber_domains['response_planning']['respond'] +
$maturity_across_cyber_domains['response_testing']['respond'] +
$maturity_across_cyber_domains['mitigation_and_recovery']['respond']) / 14, 2);

//Overall Cyber Maturity Check
$overall_cyber_maturity_average_check = "";
if($overall_cyber_maturity_average >= .91 && $overall_cyber_maturity_average <= 1) {
    $overall_cyber_maturity_average_check = "innovative";
} else if($overall_cyber_maturity_average >= .76 && $overall_cyber_maturity_average <= .9) {
    $overall_cyber_maturity_average_check = "advanced";
} else if($overall_cyber_maturity_average >= .51 && $overall_cyber_maturity_average <= 75) {
    $overall_cyber_maturity_average_check = "intermediate";
} else if($overall_cyber_maturity_average >= .26 && $overall_cyber_maturity_average <= .5) {
    $overall_cyber_maturity_average_check = "evolving";
} else {
    $overall_cyber_maturity_average_check = "baseline";
}

//Maturity Across Core Functional Areas
$maturity_across_core_functional_areas['identify'] = ($maturity_across_cyber_domains['oversight']['identify'] +
$maturity_across_cyber_domains['it_asset_management']['identify'] +
$maturity_across_cyber_domains['risk_assessment']['identify'] +
$maturity_across_cyber_domains['third_party_risk']['identify']) / 4;

$maturity_across_core_functional_areas['protect'] = ($maturity_across_cyber_domains['training_culture']['protect'] +
$maturity_across_cyber_domains['infrastructure_management']['protect'] +
$maturity_across_cyber_domains['patch_management']['protect']) / 3;

$maturity_across_core_functional_areas['detect'] = ($maturity_across_cyber_domains['threat_intelligence_and_information']['detect'] +
$maturity_across_cyber_domains['monitoring_and_analysis']['detect'] +
$maturity_across_cyber_domains['threat_and_vulnerability_detection']['detect'] +
$maturity_across_cyber_domains['event_detection']['detect']) / 4;

$maturity_across_core_functional_areas['respond-recover'] = ($maturity_across_cyber_domains['response_planning']['respond'] +
$maturity_across_cyber_domains['response_testing']['respond'] +
$maturity_across_cyber_domains['mitigation_and_recovery']['respond']) / 3;

$maturity_across_core_functional_areas['array'] = ['identify' => $maturity_across_core_functional_areas['identify'],
'protect' => $maturity_across_core_functional_areas['protect'],
'detect' => $maturity_across_core_functional_areas['detect'],
'respond-recover' => $maturity_across_core_functional_areas['respond-recover']];

$maturity_across_core_functional_areas['lowest_by_value'] = min($maturity_across_core_functional_areas['array']);

$maturity_across_core_functional_areas['lowest_by_key'] = min(array_keys($maturity_across_core_functional_areas['array']));

//Domains Important/Recommentations/Services
$domains_data = [
    "oversight" => [
        "label" => "Oversight",
        "value" => $maturity_across_cyber_domains['oversight']['identify'],
        "why_is_it_important" => "Establishing a robust security program is crucial for any organization looking to protect itself against cyber threats. As part of any good cyber program it's important to have a dedicated person responsible for ongoing oversight, such as CISO or Head of Security.  A CISO is critical to ensuring that your program is comprehensive, up-to-date and align to mitigate risk.
        <br/><br/>
        Assigning someone oversight to the program ensures that the board or executive team is informed of risk and threats to the business and that the proper strategy is in place to mitigate risk.  Equally important to having a CISO to oversee the program is the need to make sure there are clearly assigned security roles and responsibilities to all other members of the security organization.",
        "how_can_we_help" => "SilverSky's vCISO services can assist customer's in managing and maintaining their cyber program at a strategic level by providing seasoned professionals with decades of indusrty security expertise. SilverSky's vCISO can be used as much or as little as you need them.  They can help fill a specific gap or project or be a more consistent resource to help build and manage the growth of your cyber program.",
        "match_service" => "SilverSky's vCISO Services",
    ],

    "it_asset_management" => [
        "label" => "IT Asset Management",
        "value" => $maturity_across_cyber_domains['it_asset_management']['identify'],
        "why_is_it_important" => "Maintaining an inventory of organizational assets, prioritizing assets based on criticality/value to the business, assigning accountability for maintaining the inventory of assets, and having a formal change management process are vital components for effective cybersecurity management. Developing processes around asset management helps organizations understand their digital landscape, assess risks, detect threats, manage vulnerabilities, control access, respond to incidents, and comply with regulations.
        <br/><br/>
        The lack of an asset inventory process affects an organizations ability to perform other critical cyber security tasks such as Risk Managment, Threat Detection and Response, Patch and Vulnerability Management, Incident Response and Compliance management.",
        "how_can_we_help" => "SilverSky's Insight service is an AI based, cloud agnostic, cyber security platform designed specifically to take the complexity out of vulnerability management while providing visabilityto assets and risk based context to each threat.  SilverSky's Insight uses supervised machine learning based on our global attack and threat intelligence database to accurately rate risks and issue immediate alerts and recommendations that prevent potential cyber-attacks.",
        "match_service" => "SilverSky's Insight Services",
    ],

    "risk_assessment" => [
        "label" => "Risk Assessment",
        "value" => $maturity_across_cyber_domains['risk_assessment']['identify'],
        "why_is_it_important" => "Performing ongoing Risk Assessments are one of the most important part of a cyber program and serves as the foundation to which a strong cyber program.  By implementing a risk management strategy, organizations can prioritize risks based on their potential impact and likelihood of occurrence. This allows them to allocate their resources effectively and focus on addressing the most critical risks that could have severe consequences for their operations, reputation, or data. In addition,
        <br/><br/>
        A risk assessment involves evaluating the potential threats that an organization may face, such as malware, phishing attacks, or insider threats. By understanding these threats, organizations can develop appropriate countermeasures and controls to mitigate the risks effectively. Many industries and regulatory frameworks recognize the importance of risk analysis and therfore require organizations to perform risk assessments as part of their compliance obligations.",
        "how_can_we_help" => "At SilverSky, we understand that conducting regular risk assessments is a critical component of maintaining a strong security posture. The SilverSky Consulting team can work with your organization to perform a comprehensive IT Risk assessment of your infrastructure to identify any known vulnerabilities and weaknesses and develop risk mitigations places. We will also help you determine whether your current security investments are aligned with your organization's risk profile and provide guidance on necessary security controls. Our risk assessment process takes into account the value of each asset to your organization, as well as the potential impact of any security incidents. This approach enables us to provide clear recommendations for specific security controls that can help mitigate risk and protect your critical assets.",
        "match_service" => "SilverSky's ProServ IT Risk Assessment",
    ],

    "third_party_risk" => [
        "label" => "Third Party Risk",
        "value" => $maturity_across_cyber_domains['third_party_risk']['identify'],
        "why_is_it_important" => "Many organizations rely on third-party vendors for various services, such as cloud computing, software development, data storage, and customer support.  These vendors often have access to sensitive data and systems in order to provide services to your organization.  Organization's increased use of third-party vendors has resulted in an expanded attack surface for organization's that extend beyond the boundraries of a traditional network.
        <br/><br/>
        Cybercriminals may target these vendors in attempts to gain unauthorized access to your organization's systems or data. Having a mature third-party risk program helps assess the security posture of these vendors and ensures they have appropriate cybersecurity measures in place to protect your data.",
        "how_can_we_help" => "At Silversky, we understand that the traditional attack surface has extended way beyond our traditional network perimeters as we rely more and more on third parties. SIlverSky's third party offerings include our professional services teams who can help build a third party progra to ensure you have proper oversight and risk evaluation. In addition, we have partnered with Black Kite, a leader in third party monitoring to provide an ongoing managed service around your third party risk profiles. BlackKite provides the industry’s most accurate and comprehensive cyber intelligence, resulting in unparalleled visibility into the risk vendors introduce into our customer environments.",
        "match_service" => "Third Party Risk Services - Black Kite",
    ],

    "training_culture" => [
        "label" => "Training/Culture",
        "value" => $maturity_across_cyber_domains['training_culture']['protect'],
        "why_is_it_important" => "Human error is still a leading cause of security breaches within most organizations. While technology plays a crucial role in cybersecurity protection, people are still an area of weakness in most security programs. An educated and trained employee (AKA \"The human firewall\") is a critical component to a strong security program.  Seventy Percent (70%) of all attacks start with social engineering or phishing of users.
        <br/><br/>
        Employees who are unaware of cybersecurity best practices or who fall for phishing scams can unintentionally compromise their organization's security. Regular security training helps employees understand the importance of cybersecurity and how to protect against threats. In addition, regular phishing testing helps employees recognize the signs of a phishing attack and respond appropriately before they are faced with the real scenario.",
        "how_can_we_help" => " Silversky's can reduce the burden of having the continually train and test your staff through SilverSky's Aware service. Powered by the industry leading KnowBe4 knowledge management and phishing platform, SilverSky's team of cyber security experts will provide a fully outsoruced and managed solution while providing strategic guidance to reduce the risk of employees falling victim to phishing threats within your environment.  SilverSky's training and testing lifecycle helps employees train on the latest tactics and techniques, Silversky ensures that your organization's \"human firewall\" is strong and resilient. Then through regular testing, we help your employees build develop better practices to identify and respond to social engineering attacks, including phishing.",
        "match_service" => "SilverSky Aware",
    ],

    "infrastructure_management" => [
        "label" => "Infrastructure Management",
        "value" => $maturity_across_cyber_domains['infrastructure_management']['protect'],
        "why_is_it_important" => "Effective infrastructure management ensures that the organization's critical systems and networks are secure. Infrastructure management focuses on maintaining the availability and reliability of systems and networks. It includes tasks such as capacity planning, performance monitoring, fault tolerance, and disaster recovery planning.
        <br/><br/>
        In addition, Infrastructure Management involves implementing security measures such as firewalls, intrusion detection systems, access controls, and encryption to protect against cyber threats. Regular monitoring, patching, and updating of infrastructure components are also a vital role within Infrasturcutre Management in order to address vulnerabilities and stay resilient against emerging risks.",
        "how_can_we_help" => "SilverSky offers a wide array of services to help our customers with the ongoing manangement of their infrastucture through the experties of our security device management teams.  In addition, SilverSky's consulting team can provide ongoing controls assessment and configuration health reviews to ensure your infrastructure is keeping pace with security best practices.",
        "match_service" => "SilverSky ProServ -IT Controls Review, Managed Firewall Service, Firewall Configuration Reviews (QSR), Managed DUO",
    ],

    "patch_management" => [
        "label" => "Patch Management",
        "value" => $maturity_across_cyber_domains['patch_management']['protect'],
        "why_is_it_important" => "Patch management is critical for maintaining the security, stability, and integrity of software systems, protecting against known vulnerabilities, and reducing the risk of cyber attacks.
        <br/><br/>
        Software and operating systems often contain vulnerabilities that can be exploited by cyber attackers. Patches are updates released by software vendors to fix these vulnerabilities and strengthen the security of the software. By promptly applying patches, organizations can protect their systems from known security flaws and reduce the risk of successful cyber attacks.",
        "how_can_we_help" => "Effective patch management is crucial to maintaining the security of your systems and reducing the risk of cyberattacks. However, patch management can be a time-consuming and complex process that requires expertise and resources. SilverSky has a vast partner network of IT technology solutions partners.  While Silversky focuses on the vulernability and risk remediation part of patch management, we have several partners that offer solutions around patch management.  These patch management services when combined with our SilverSky Insight vulnerability management offerings provide a fully outsourced lifecycle solution for our customers.",
        "match_service" => "SilverSky Partner Network- Patch Management",
    ],

    "threat_intelligence_and_information" => [
        "label" => "Threat Intelligence and Information",
        "value" => $maturity_across_cyber_domains['threat_intelligence_and_information']['detect'],
        "why_is_it_important" => "Threat intelligence and information plays a crucial role in a security program because it provides valuable information and context about potential threats and adversaries that can be used to improve the organization's security posture.
        <br/><br/>
        By collecting and analysing threat intelligence, security teams can gain insights into the tactics, techniques, and procedures (TTPs) used by cybercriminals, nation-state actors, hacktivists, and other threat actors. This information can be used to identify potential vulnerabilities in the organization's infrastructure, applications, and systems, and to develop effective countermeasures to prevent or mitigate attacks.",
        "how_can_we_help" => "Staying informed about the latest cyber threats is critical to maintaining the security of your organization's network and systems. SilverSKy's Lightning services come integrated with both commercial and open source threat intelligence feeds that feeds our services.  In addition, as part of the SilverSky MDR services, you benefit from the SilverSky cyber range where our team of data scientists on constantly testing new exploits and threats to add to our artificial intelligence back end.  SilverSky security analysts gain valuable insights into emerging threats and tactics used by attackers through our thereat intelligence enrichment of the data. Our team continuously monitors and analyzes these threats to provide proactive threat detection and response, helping to protect your organization against new and evolving cyber threats.",
        "match_service" => "SilverSky Lightning MDR, MEDR",
    ],

    "monitoring_and_analysis" => [
        "label" => "Monitoring and Analysis",
        "value" => $maturity_across_cyber_domains['monitoring_and_analysis']['detect'],
        "why_is_it_important" => "Monitoring and analysis are critical components of any comprehensive cybersecurity program because they help to detect and review potential security threats in a timely manner. The Monitoring and analysis function provides continuous review of network activity, system logs, and other sources of information to detect any signs of suspicious or malicious activity.
        <br/><br/>
        By detecting security threats early, organizations can take immediate action to limit the damage of the potential threat and limit it’s impact to the organization. By monitoring and performing analysis of network traffic, system logs, and other data sources, organizations can identify vulnerabilities, understand attack patterns, and make informed decisions",
        "how_can_we_help" => "As part of the Silverky Lightning MDR services, the Silversky team works with your organization to ensure we are ingesting the most critical data feeds and the right telemetry into the Lightning platform.  Silversky's logging processes for threat detection are also essential in preventing, detecting, and minimizing the impact of a data compromise and providing feedback to help mitigate threats within your environment. SilverSky's lightning MDR takes the burden off your internal resources so that you can ensure that your organization is covered 24/7, meeting compliance and regulatory requirements, minimizing data breaches, and responding quickly to any incidents that occur.",
        "match_service" => "SilverSky Lightning MDR, MEDR",
    ],

    "threat_and_vulnerability_detection" => [
        "label" => "Threat and Vulnerability Detection",
        "value" => $maturity_across_cyber_domains['threat_and_vulnerability_detection']['detect'],
        "why_is_it_important" => "Threat and vulnerability detection processes such as vulnerability scanning, penetration testing, email security and end point detection controls are essential components of a comprehensive cybersecurity program because they help to identify and mitigate potential security risks before they can be exploited by attackers.   This early detection can help organizations respond quickly and prevent damage or loss of a potential cyber threat. Threat and vulnerability detection can help identify and protect critical assets, such as customer data or intellectual property, from cyber-attacks. This protection is particularly important for organizations that rely heavily on their reputation and brand.",
        "how_can_we_help" => "Silversky can help you through performing regular internal and external vulnerability scans and annual penetration testing of your organization. These services are critical steps in maintaining a strong security posture and identifying potential vulnerabilities that can be exploited by cybercriminals.
        <br/><br/>
        Silversky can assist with it’s SilverSky Insight service that t provides vulnerability assessment tools and performance of regular scans to identify and prioritize vulnerabilities in the organization's network, systems, and applications.
        <br/><br/>
        SilverSky’s Continuous Validation services can also assist you to enhance maturity of this control by performing deep-level testing combining multiple attack vectors to confirm actual rather than theoretical exploitability of vulnerabilities and misconfigurations present on external devices and critical business systems",
        "match_service" => "SilverSky Insight",
    ],

    "event_detection" => [
        "label" => "Event Detection",
        "value" => $maturity_across_cyber_domains['event_detection']['detect'],
        "why_is_it_important" => "Event logging and detection play critical roles in a security program by providing valuable information that can help prevent, detect, and respond to security incidents. Event logging involves the collection of data on activities occurring within a system or network. The ability to detect events across critical system components like perimeter activity, email activity, endpoint activity and user activity are critical for the ability to reconstruct what happened during a security incident.",
        "how_can_we_help" => "Silversky Lightning services help provide the expert team to help your organization to monitor user activity, detect suspicious behavior, and respond to potential security incidents in a timely manner. Our team are experts in security information and event management (SIEM) and other advanced analytics tools, they can help you to establish a baseline of normal system and network activity, detect deviations, and investigate any suspicious activity. They can also assist with implementing processes to detect unauthorized devices on your network and establishing clear and documented escalation procedures for incident response.",
        "match_service" => "SilverSky Lightning MDR, MEDR",
    ],

    "response_planning" => [
        "label" => "Response Planning",
        "value" => $maturity_across_cyber_domains['response_planning']['respond'],
        "why_is_it_important" => "In today's Cyber world it is not a question of \"if\" but \"when\" an attack will occur. To minimize the damage of a Cybersecurity incident requires quick and decisive action. By having an effective incident response planning process in place organizations will minimize the potential damage \"when\" a cyber incident occurs.
        <br/>
        A critical part of the response planning process is to develop an incident response plan. Having an incident response plan ensures that organizations have pre-defined processes and procedures to follow when an incident occurs. By having a well-defined and documented plan in place, organizations can respond swiftly and appropriately to incidents, limiting their impact and reducing the time it takes to recover.",
        "how_can_we_help" => "Silversky can help your organization extend beyond traditional SOC operations with the addition of SIlverSky's Managed Incident Response service.  SilverSky's MIR services are bundled with all of the key services needed in developing an comprehensive response process.  The SilverSKy MIR service is tighly integrated with our SIlverSKy lighting services to minimize the time to response an engage during an incident.  The MIR service includes a customer incident response plan, ongoing table top tests, a bundle of starter IR hours and annual health checks to provide a complete IR service add on. In addition to the SilverSky MIR services, SilverSky's professional services team can help you with the development of an incident response plan.",
        "match_service" => "SilverSky MIR, SilverSky ProServ - IR Plan Development",
    ],

    "response_testing" => [
        "label" => "Response Testing",
        "value" => $maturity_across_cyber_domains['response_testing']['respond'],
        "why_is_it_important" => "Testing of your incident response plan is critical for a cyber program because it helps to identify any weaknesses or gaps in your plan before an actual cyber attack occurs. A common process in response testing is to perform table top tests or walk throughs of a plan which simulate real incident scenarios. By simulating different types of cyber attacks and scenarios, you can evaluate the effectiveness of your incident response plan and ensure that it is comprehensive and well-coordinated.",
        "how_can_we_help" => "Silversky can help your organization extend beyond traditional SOC operations with the addition of SIlverSky's Managed Incident Response service.  SilverSky's MIR services are bundled with all of the key services needed in developing an comprehensive response process. Part of the MIR service bundle includes periodic testing of your IR functions through a online community approach. Through this service, organizations can test their incident response plan to identify weaknesses, improve response times, and minimize the impact of cyber incidents. Testing helps to simulatie various attack scenarios and involvies key parts of your external team, such as SilverSKy's SOC and our partner Incident Response firm, S-RM. This collaboration ensures a coordinated response and identifies potential gaps or weaknesses in the plan.",
        "match_service" => "SilverSky MIR, SilverSky ProServ - Table Top Testing",
    ],

    "mitigation_and_recovery" => [
        "label" => "Mitigation and Recovery",
        "value" => $maturity_across_cyber_domains['mitigation_and_recovery']['respond'],
        "why_is_it_important" => "A cyber incident, such as a data breach or a ransomware attack, can disrupt business operations and systems. A business resumption  plan works in conjunction with an organization's incident response plan. While the incident response plan focuses on the immediate actions to address a cyber incident, the business resumption plan takes a broader perspective and encompasses the recovery and restoration of business operations.
        <br/><br/>
        Business resumption plans are vital to a cyber program because they enable organizations to effectively respond to cyber incidents, minimize downtime, ensure continuity, enhance incident response capabilities, mitigate financial and legal risks, and promote stakeholder confidence.",
        "how_can_we_help" => "Silversky can help your organization extend beyond traditional SOC operations with the addition of SIlverSky's Managed Incident Response service.  SilverSky's MIR services are bundled with all of the key services needed in developing an comprehensive rescovery process.  The SilverSKy MIR includes a bundle of Incident Response retainer hours through our Incident response partner, S-RM that will engage upon a declared incident and help implement a business resumption strategy to get your business up an operational as quickly as possible.",
        "match_service" => "SilverSky MIR, SilverSky ProServices - IR Plan Development",
    ],
];
?>