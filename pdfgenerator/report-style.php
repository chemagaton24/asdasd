<style>
@page { margin: 27px 18px; }
img {
	image-rendering: optimize-contrast;
	image-rendering: crisp-edges;
	image-rendering: -moz-crisp-edges;
	image-rendering: -o-crisp-edges;
	image-rendering: -webkit-optimize-contrast;
	-ms-interpolation-mode: nearest-neighbor;
}
table {
	font-size: 14px;
}
ol {
	padding: 0;
	counter-reset: item;
}
ol ol {
	padding-left: 32px;
	margin-top: 8px;
}
ol.no-padding, ol.no-padding ol {
	padding: 0;
}
ol > li {
	display: block;
	margin-bottom: 8px;
}
ol > li:before {
	content: counters(item, ".") " ";
	counter-increment: item;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
ol ul {
	margin: 24px 0;
}
ol ul > li {
	margin-bottom: 16px;
}
ol > li > b {
	color: #263C91;
}
.talign-center {
	text-align: center;
}
.ttransform-capitalize {
	text-transform: capitalize;
}
.report__intro-page {
	position: absolute;
	left: 0;
	top: 0;
	z-index: 1;
	width: 100%;
	height: 100%;
	padding-top: 16px;
}
.footer {
	position: fixed; 
	z-index: 0;
	bottom: -5px; 
	left: 0px; 
	width: 100%;
	text-align: center;
	line-height: 12px;
}
.footer span {
	font-size: 9px;
	text-transform: uppercase;
}
.footer:after {
	content: "Page ".counter(page);
	display: block;
	position: absolute;
	right: 0;
	top: 5px;
	font-size: 12px;
}
.page__break { page-break-before: always; }
.report__main {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
}
.report__intro-bg {
	position: absolute;
	left: 0;
	top: 0;
	z-index: 1;
	width: 100%;
	height: 95%;
	background-image: url('<?php echo dirname(__FILE__) ?>/assets/intro-bg-gradient.jpg');
}
.report__intro-header {
	position: relative;
	z-index: 1;
	padding: 0 64px;
	margin-bottom: 48px;
}
.report__intro-header table {
	border-bottom: 2px solid #3278b7;
	width: 100%;
	margin: 0;
	padding: 0;
}
.report__intro-header td {
	text-align: left;
}
.report__intro-header td:first-child {
	width: 1%;
	padding-right: 32px;
}
.report__intro-header-logo {
	width: 160px;
}
.report__intro-header-text {
	display: inline-block;
	font-size: 35px;
	color: #fff;
	text-align: center;
	font-weight: bold;
}
.report__intro {
	position: relative;
	z-index: 1;
	padding: 150px 0;
	text-align: center;
	background-image: url('<?php echo dirname(__FILE__) ?>/assets/intro-bg.jpg');
}
.report__intro-inner {
	display: inline-block;
	text-align: left;
	max-width: 400px;
}
.report__intro-subheading {
	font-size: 16px;
	color: #fff;
	margin-bottom: 24px;
}
.report__intro-heading {
	font-size: 58px;
	color: #fff;
}
.report__table-of-contents {
	color: #1f497d;
	font-size: 20px;
	margin-top: 48px;
}
.report__table-of-contents-title {
	text-align: center;
	font-size: 32px;
	font-weight: bold;
}
.report__table-of-contents > ol > li {
	border-bottom: 6px solid #1f497d;
	padding: 5px 38px;
}
.report__table-of-contents ol li:before {
	margin-right: 36px;
	width: 40px;
	text-align: center;
	display: inline-block;
}
.report__table-of-contents > ol > li:first-child {
	border-top: 6px solid #1f497d;
}
.report__table-of-contents > ol > li:last-child {
	border-bottom: 0;
}
.report__table-of-contents > ol > li > ol {
	font-size: 18px;
}
.report__table-of-contents > ol > li > ol > li {
	position: relative;
}
.report__table-of-contents > ol > li > ol > li .page-num {
	position: absolute;
	right: 0;
}
.report__table-of-contents > ol > li > ol > li:before {
	font-weight: normal;
}
.report__client-profile__header {
	background-color: #b8cce4;
	padding: 32px 8px;
}
.report__client-profile__header-heading {
	color: #263c91;
	font-size: 20px;
	font-weight: bold;
	margin-bottom: 38px;
}
.report__client-profile__header-sub-heading {
	font-size: 11px;
	font-weight: bold;
	color: #263c91;
}
.report__client-profile__table-heading {
	font-size: 11px;
	font-weight: bold;
	color: #263c91;
	margin: 8px 0;
}
.report__client-profile__table {
	width: 100%;
	border-collapse: collapse;
	table-layout: fixed;
}
.report__client-profile tbody {
	border-top: 4px solid #366092;
}
.report__client-profile td {
	padding: 6px 8px;
	border-bottom: 4px solid #366092;
	font-size: 12px;
}
.report__client-profile__table-td-label {
	background-color: #95b3d7;
	color: #fff;
	width: 100px;
	font-weight: bold;
}
.report__client-profile__table-td-blank {
	position: relative;
}
.report__client-profile__table-td-blank:before {
	content: "";
	display: block;
	position: absolute;
	left: 0;
	top: -4px;
	width: 100%;
	height: 33px;
	background-color: #366092;
}
.report__table-of-contents-list-root-item {
	background-color: #b8cce4;
	padding: 30px 8px;
	border-bottom: 4px solid #366092;
}
.report__table-of-contents-list-root-item-heading {
	color: #263c91;
	font-size: 20px;
	font-weight: bold;
	margin-bottom: 38px;
}
.report__table-of-contents-list-root-item-label {
	font-size: 13px;
	font-weight: bold;
	color: #263c91;
}
.report__table-of-contents-list-sub-item-label {
	font-size: 13px;
	font-weight: bold;
	color: #263c91;
	padding: 8px;
}
.report__table-of-contents-list-sub-item-label-sub {
	font-size: 11px;
	font-weight: bold;
	color: #366092;
	margin: 5px 0;
}
.report__table-of-contents-list-sub-item-blue-text {
	background-color: #b8cce4;
	font-size: 11px;
	color: #366092;
	padding: 6px 3px;
}
.report__table-of-contents-list-sub-item-light-blue-text {
	background-color: #dce6f1;
	font-size: 11px;
	color: #366092;
	padding: 6px 3px;
}
.report__table-of-contents-list-sub-item-grey-text {
	background-color: #d9d9d9;
	font-size: 11px;
	color: #366092;
	padding: 6px 3px;
}
.report__table-of-contents-list-sub-item-blue-text h4,
.report__table-of-contents-list-sub-item-light-blue-text h4,
.report__table-of-contents-list-sub-item-grey-text h4 {
	font-size: 16px;
	font-weight: bold;
	margin: 0;
}
.report__table-of-contents-list-sub-item-blue-text ul,
.report__table-of-contents-list-sub-item-light-blue-text ul,
.report__table-of-contents-list-sub-item-grey-text ul {
	margin: 0;
	padding: 0 0 0 16px;
}
.report__table-of-contents-list-sub-item-chart img {
	max-width: 100%;
}
.report__table-of-contents-list-sub-item-blue-text p:first-child {
	margin-top: 0;
}
.report__table-of-contents-list-sub-item-blue-text p:last-child {
	margin-bottom: 0;
}
.report__table-of-contents-list-sub-item-blue-text--executive-summary {
	padding-bottom: 0;
}
.report__table-of-contents-list-sub-item-blue-text--executive-summary table {
	transform: translate(3px, 1px);
}
.report__table-of-contents-list-sub-item-blue-text-table--executive-summary {
	width: 100%;
	font-size: 11px;
	margin: 0;
	padding: 0;
}
.report__table-of-contents-list-sub-item-blue-text-table-td-percentie----executive-summary {
	width: 140px;
}
.report__table-of-contents-list-sub-item-blue-text-table--executive-summary-percentile {
	width: 100%;
	transform: translateX(6px);
	text-align: center;
	font-size: 11px;
	color: #000;
	border-collapse: collapse;
	margin: 0;
	padding: 0;
}
.report__table-of-contents-list-sub-item-blue-text-table--executive-summary-percentile td {
	padding: 4px 8px;
}
.report__table-of-contents-list-sub-item-blue-text-table--executive-summary-percentile td:first-child {
	background-color: #4f81bd;
}
.report__table-of-contents-list-sub-item--cyber-domain-maturity-assessment-table {
	width: 100%;
	border-collapse: collapse;
	table-layout: fixed;
}
.report__table-of-contents-list-sub-item--cyber-domain-maturity-assessment-table thead {
	background-color: #d9d9d9;
	font-weight: bold;
	color: #366092;
}
.report__table-of-contents-list-sub-item--cyber-domain-maturity-assessment-table tbody {
	border: 1px solid #000;
	background-color: #f2f2f2;
}
.report__table-of-contents-list-sub-item--cyber-domain-maturity-assessment-table thead th,
.report__table-of-contents-list-sub-item--cyber-domain-maturity-assessment-table tbody td {
	text-align: left;
	padding: 4px;
	font-size: 11px;
}
.report__table-of-contents-list-sub-item--cyber-domain-maturity-assessment-table tbody td {
	color: #366092;
}
.report__table-of-contents-list-sub-item--silversky-service-recommendations-table {
	width: 100%;
	border-collapse: collapse;
	border-left: 1px solid #000;
	border-top: 1px solid #000;
}
.report__table-of-contents-list-sub-item--silversky-service-recommendations-table thead {
	background-color: #d9d9d9;
	font-weight: bold;
	color: #366092;
}
.report__table-of-contents-list-sub-item--silversky-service-recommendations-table tbody {
	background-color: #f2f2f2;
}
.report__table-of-contents-list-sub-item--silversky-service-recommendations-table thead th,
.report__table-of-contents-list-sub-item--silversky-service-recommendations-table tbody td {
	text-align: left;
	padding: 4px;
	font-size: 11px;
	border-right: 1px solid #000;
	border-bottom: 1px solid #000;
}
.report__table-of-contents-list-sub-item--silversky-service-recommendations-table tbody td {
	padding: 8px 2px;
}
.report__table-of-contents-list-sub-item--silversky-service-recommendations-table tbody td {
	color: #366092;
}
.report__overall-cyber-maturity-posture__table {
	width: 100%;
	border-spacing: 2px;
}
.report__overall-cyber-maturity-posture__table td {
	background-color: #edecec;
	padding: 12px;
	font-size: 10px;
}
.report__overall-cyber-maturity-posture__table td:first-child {
	color: #000;
	text-align: center;
	font-size: 10px;
	font-weight: bold;
	width: 33%;
}
.report__overall-cyber-maturity-posture__table td:last-child {
	color: #000;
	text-align: center;
	font-size: 10px;
	font-weight: bold;
	width: 1%;
}
.report__overall-cyber-maturity-posture__table__tr--baseline td:first-child {
	background-color: #deeaf6;
}
.report__overall-cyber-maturity-posture__table__tr--evolving td:first-child {
	background-color: #bdd6ee;
}
.report__overall-cyber-maturity-posture__table__tr--intermediate td:first-child {
	background-color: #9cc2e5;
}
.report__overall-cyber-maturity-posture__table__tr--advance td:first-child {
	background-color: #2e74b5;
}
.report__overall-cyber-maturity-posture__table__tr--invested td:first-child {
	background-color: #1f4e79;
}
.report__maturity-across-core-functional-areas__table {
	width: 100%;
	text-align: center;
	margin: 0 auto;
	border-collapse: collapse;
	font-size: 12px;
}
.report__maturity-across-core-functional-areas__table thead {
	background-color: #538dd5;
}
.report__maturity-across-core-functional-areas__table th, .report__maturity-across-core-functional-areas__table td {
	padding: 8px;
}
.report__maturity-across-core-functional-areas__table td {
	border-right: 1px solid #000;
	border-bottom: 1px solid #000;
}
.report__maturity-across-core-functional-areas__table tr:first-child td {
	border-top: 1px solid #000;
}
.report__maturity-across-core-functional-areas__table tr td:first-child {
	border-right: 1px solid #000;
	border-top: 0;
	border-bottom: 0;
}
.report__maturity-across-core-functional-areas__table th {
	color: #fff;
	font-size: 10px;
}
.report__maturity-across-core-functional-areas__table td:first-child {
	background-color: #dce6f1;
	text-align: left;
	color: #366092;
	width: 60%;
	font-size: 10px;
}
.report__maturity-across-core-functional-areas__table-tr--identify td:first-child {
	background-color: #dce6f1;
	color: #000;
}
.report__maturity-across-core-functional-areas__table-tr--protect td:first-child {
	background-color: #b8cce4;
	color: #000;
}
.report__maturity-across-core-functional-areas__table-tr--detect td:first-child {
	background-color: #95b3d7;
	color: #000;
}
.report__maturity-across-core-functional-areas__table-tr--respond-recover td:first-child {
	background-color: #366092;
	color: #000;
}
.report__maturity-across-cyber-domains__table {
	width: 100%;
	font-size: 12px;
	border-collapse: collapse;
}
.report__maturity-across-cyber-domains__table tbody {
	outline: 2px solid #fff;
}
.report__maturity-across-cyber-domains__table td {
	padding: 8px;
	border: 0;
}
.report__maturity-across-cyber-domains__table--identify {
	background-color: #dce6f1;
}
.report__maturity-across-cyber-domains__table--protect {
	background-color: #b8cce4;
}
.report__maturity-across-cyber-domains__table--detect {
	background-color: #95b3d7;
}
.report__maturity-across-cyber-domains__table--respond-recover {
	background-color: #366092;
}
.report__maturity-across-cyber-domains__table-category {
	text-align: center;
	width: 60px;
}
.report__maturity-across-cyber-domains__table-category span {
	display: inline-block;
	transform: rotate(-90deg);
	transform-origin: 50% 50%;
	width: 60px;
}
.report__maturity-across-cyber-domains__table-value {
	text-align: center;
	width: 25%;
	outline: 2px solid #fff;
}
.report__maturity-across-cyber-domains__table-value--76-100 {
	background-color: #63BE7B;
}
.report__maturity-across-cyber-domains__table-value--51-75 {
	background-color: #86C97E;
}
.report__maturity-across-cyber-domains__table-value--26-50 {
	background-color: #FEDC81;
}
.report__maturity-across-cyber-domains__table-value--1-25 {
	background-color: #FCBF7B;
}
.report__maturity-across-cyber-domains__table-value--0 {
	background-color: #F8696B;
}
.report__table-of-contents-list-sub-item-capability-table {
	font-size: 10px;
	width: 100%;
	border-collapse: collapse;
	text-align: center;
}
.report__table-of-contents-list-sub-item-capability-table td {
	background-color: #b8cce4;
	color: #366092;
}
.report__table-of-contents-list-sub-item-capability-table td:last-child {
	background-color: #0f243e;
	color: #fff;
	font-size: 16px;
	padding: 16px;
	width: 40%;
}
.report__cyber-program-assessment__table {
	width: 100%;
	border-collapse: collapse;
	font-size: 10px;
}
.report__cyber-program-assessment__table thead {
	background-color: #538dd5;
	color: #fff;
}
.report__cyber-program-assessment__table-tr--value-heading th {
	outline: 1px solid #000;
	background-color: #8db4e2;
}
.report__cyber-program-assessment__table tbody {
	background-color: #EDEDED;
}
.report__cyber-program-assessment__table th, .report__cyber-program-assessment__table td {
	padding: 8px;
}
.report__cyber-program-assessment__table td {
	text-align: center;
	outline: 1px solid #000;
}
.report__cyber-program-assessment__table td:first-child {
	text-align: left;
	background-color: #b8cce4;
}
.report__cyber-program-assessment__table td img {
	width: 9px;
}
.report__summary-of-recommeded-actions__table {
	width: 100%;
	border-collapse: collapse;
	border-left: 1px solid #000;
	border-top: 1px solid #000;
	font-size: 9px;
	margin-top: 10px;
}
.report__summary-of-recommeded-actions__table td, .report__summary-of-recommeded-actions__table th {
	padding: 6px;
	border-right: 1px solid #000;
	border-bottom: 1px solid #000;
}
.report__summary-of-recommeded-actions__table th {
	background-color: #8db4e2;
	color: #fff;
	padding: 4px;
	white-space: nowrap;
}
.report__summary-of-recommeded-actions__table td {
	color: #263c91;
	background-color: #d9d9d9;
	text-align: center;
}
.report__summary-of-recommeded-actions__table--maturity-improvement-areas td:nth-child(1),
.report__summary-of-recommeded-actions__table--maturity-improvement-areas td:nth-child(2),
.report__summary-of-recommeded-actions__table--maturity-improvement-areas td:nth-child(3) {
	background-color: #b8cce4;
}
.report__summary-of-recommeded-actions__table--maturity-improvement-areas td:nth-child(1),
.report__summary-of-recommeded-actions__table--maturity-improvement-areas td:nth-child(2),
.report__summary-of-recommeded-actions__table--maturity-improvement-areas td:nth-child(3),
.report__summary-of-recommeded-actions__table--maturity-improvement-areas td:nth-child(4) {
	font-weight: bold;
}
.report__summary-of-recommeded-actions__table--how-can-we-help td:nth-child(1) {
	background-color: #b8cce4;
}
.report__summary-of-recommeded-actions__table--how-can-we-help td:nth-child(1),
.report__summary-of-recommeded-actions__table--how-can-we-help td:nth-child(2) {
	font-weight: bold;
}
.last-page {
	position: relative;
	width: 100%;
	height: 96%;
	background-image: url('<?php echo dirname(__FILE__) ?>/assets/last-page-bg.jpg');
	background-size: cover;
}
.last-page .logo {
	width: 400px;
	margin-bottom: -40px;
}
.last-page .inner {
	text-align: center;
	padding-top: 200px;
	margin: 0 auto;
}
.last-page .blue-text {
	color: #00a3ff;
	font-size: 32px;
	font-style: italic;
}
.last-page .thank-you-text {
	color: #fff;
	font-size: 32px;
	margin-bottom: 24px;
}
.last-page .contact-links {
	margin-bottom: 24px;
}
.last-page .contact-links a {
	color: #00a3ff;
	margin: 0 4px;
}
.last-page .social-icon {
	width: 28px;
	margin: 0 4px;
	text-decoration: none;
	font-size: 0px;
}
</style>