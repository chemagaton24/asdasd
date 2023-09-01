<style>
@page { margin: 68px 68px 32px; }
@page :first { margin: 27px 18px; }
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
	bottom: 0px; 
	left: 0px; 
	width: 100%;
	text-align: center;
}
.footer span {
	font-size: 9px;
	text-transform: uppercase;
}
.footer:before {
	content: "Page ".counter(page);
	display: block;
	position: absolute;
	right: 34px;
	top: 0;
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
	height: 100%;
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
.report__table-of-contents > ol > li > ol > li:before {
	font-weight: normal;
}
.report__client-profile__header {
	background-color: #b8cce4;
	padding: 32px 8px;
}
.report__client-profile__header-heading {
	color: #2747a9;
	font-size: 20px;
	font-weight: bold;
	margin-bottom: 38px;
}
.report__client-profile__header-sub-heading {
	font-size: 11px;
	font-weight: bold;
	color: #293fa3;
}
.report__client-profile__table-heading {
	font-size: 11px;
	font-weight: bold;
	color: #293fa3;
	margin: 8px 0;
}
.report__client-profile__table {
	width: 100%;
	border-collapse: collapse;
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
	margin: 8px 0;
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
.report__table-of-contents-list-sub-item-blue-text p:first-child {
	margin-top: 0;
}
.report__table-of-contents-list-sub-item-blue-text p:last-child {
	margin-bottom: 0;
}
.report__table-of-contents-list-sub-item--cyber-domain-maturity-assessment-table {
	width: 100%;
	border-collapse: collapse;
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
	padding: 2px;
	font-size: 11px;
}
.report__table-of-contents-list-sub-item--cyber-domain-maturity-assessment-table tbody td {
	color: #366092;
}



.report__overall-cyber-maturity-posture__table {
	width: 100%;
	border-spacing: 2px;
}
.report__overall-cyber-maturity-posture__table td {
	background-color: #edecec;
	padding: 12px;
	font-size: 16px;
}
.report__overall-cyber-maturity-posture__table td:first-child {
	color: #fff;
	text-align: center;
}
.report__overall-cyber-maturity-posture__table__tr--baseline td:first-child {
	background-color: #e0eaf5;
}
.report__overall-cyber-maturity-posture__table__tr--evolving td:first-child {
	background-color: #c2d5ec;
}
.report__overall-cyber-maturity-posture__table__tr--intermediate td:first-child {
	background-color: #a3c2e1;
}
.report__overall-cyber-maturity-posture__table__tr--advance td:first-child {
	background-color: #4172b0;
}
.report__overall-cyber-maturity-posture__table__tr--invested td:first-child {
	background-color: #2b4e76;
}
.report__maturity-across-cyber-domains__table {
	width: 100%;
}
.report__maturity-across-cyber-domains__table td {
	padding: 12px;
	border: 0;
}
.report__maturity-across-cyber-domains__table--identify {
	background-color: #CCC0DA;
}
.report__maturity-across-cyber-domains__table--protect {
	background-color: #00B0F0;
}
.report__maturity-across-cyber-domains__table--detect {
	background-color: #FFC000;
}
.report__maturity-across-cyber-domains__table--respond-recover {
	background-color: #92D050;
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
	outline: 1px solid #fff;
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
.report__maturity-across-core-functional-areas__table {
	width: 70%;
	text-align: center;
	margin: 0 auto;
	border-collapse: collapse;
	border-left: 1px solid #000;
	border-top: 1px solid #000;
}
.report__maturity-across-core-functional-areas__table thead {
	background-color: #9CC2E5;
}
.report__maturity-across-core-functional-areas__table th, .report__maturity-across-core-functional-areas__table td {
	border-right: 1px solid #000;
	border-bottom: 1px solid #000;
	padding: 12px;
}
.report__cyber-program-assessment__table {
	width: 100%;
	border-collapse: collapse;
}
.report__cyber-program-assessment__table thead {
	background-color: #263C91;
	color: #fff;
}
.report__cyber-program-assessment__table tbody {
	background-color: #EDEDED;
}
.report__cyber-program-assessment__table th, .report__cyber-program-assessment__table td {
	padding: 12px;
	outline: 3px solid #fff;
}
.report__cyber-program-assessment__table td {
	text-align: center;
}
.report__cyber-program-assessment__table td:first-child {
	text-align: left;
}
.report__maturity-improvement-areas__table {
	width: 100%;
	border-collapse: collapse;
	border-left: 1px solid #000;
	border-top: 1px solid #000;
}
.report__maturity-improvement-areas__table thead {
	background-color: #9CC2E5;
}
.report__maturity-improvement-areas__table td, .report__maturity-improvement-areas__table th {
	padding: 12px;
	border-right: 1px solid #000;
	border-bottom: 1px solid #000;
}
.report__maturity-improvement-areas__table td:first-child {
	background-color: #2F5496;
	color: #fff;
	text-align: center;
}
</style>