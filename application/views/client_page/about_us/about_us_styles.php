<style>
    .eye {
    position: absolute;
    top: 332px;
    left: 860px;
    width: 24px;
    height: 24px;
    overflow: hidden;
  }
  .about-us {
    position: relative;
    font-weight: 600;
  }
  .blank-line {
    margin: 0;
  }
  .established-in-2012-container {
    position: relative;
    font-size: 20px;
    line-height: 36px;
    color: rgba(30, 30, 30, 0.8);
    display: inline-block;
    width: 1194px;
    height: 501px;
    flex-shrink: 0;
  }
  .about-us-parent {
    position: absolute;
    top: 100px;
    left: calc(50% - 600px);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    padding: 0 2px;
    align-items: center;
    justify-content: flex-start;
    gap: 64px;
    color: #1e1e1e;
  }
  .na-account-header-child {
    position: absolute;
    top: 232px;
    left: -10px;
  }
  .blue-background {
    position: absolute;
    height: 100%;
    top: 0;
    bottom: 0;
    background-color: var(--color-darkblue);
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.04);
    width: 100%;
  }
  .user-03-icon {
    position: relative;
    width: 35px;
    height: 35px;
    overflow: hidden;
    flex-shrink: 0;
  }
  .loginsignup,
  .welcome {
    position: relative;
    display: flex;
    align-items: center;
    width: 76px;
    height: 14px;
    flex-shrink: 0;
  }
  .loginsignup {
    font-size: var(--font-size-xs);
    width: 106px;
  }
  .user-03-parent,
  .welcome-parent {
    display: flex;
    justify-content: flex-start;
  }
  .welcome-parent {
    flex-direction: column;
    align-items: flex-start;
    gap: var(--gap-9xs);
    cursor: pointer;
  }
  .user-03-parent {
    position: absolute;
    top: 0;
    left: 0;
    width: 130px;
    flex-direction: row;
    align-items: center;
    gap: var(--gap-base);
  }
  .frame-wrapper {
    position: relative;
    width: 130px;
    height: 35px;
    cursor: pointer;
  }
  .frame-child {
    position: relative;
    border-right: 1px solid var(--color-white);
    box-sizing: border-box;
    width: 1px;
    height: 46px;
  }
  .heart-icon,
  .shopping-cart-03-icon {
    position: relative;
    width: 32px;
    height: 32px;
    overflow: hidden;
    flex-shrink: 0;
  }
  .shopping-cart-03-icon {
    cursor: pointer;
  }
  .group-parent,
  .heart-parent {
    display: flex;
    flex-direction: row;
    justify-content: flex-start;
  }
  .heart-parent {
    align-items: flex-start;
    gap: var(--gap-base);
  }
  .group-parent {
    position: absolute;
    font-size: 14px;
    width: 100%;
    top: calc(50% - 22.5px);
    right: 0;
    left: 0;
    align-items: center;
    gap: 32px;
  }
  .header-right {
    position: absolute;
    width: 15.71%;
    top: calc(50% - 22px);
    right: 5.16%;
    left: 79.13%;
    height: 45px;
  }
  .viber-image-2023-04-26-22-14-0-icon {
    position: relative;
    width: 58px;
    height: 52px;
    object-fit: cover;
  }
  .your-one-stop-shop-container {
    position: relative;
    cursor: pointer;
  }
  .viber-image-2023-04-26-22-14-0-parent {
    position: absolute;
    height: 100%;
    top: 0;
    bottom: 0;
    left: calc(50% - 140.5px);
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: var(--gap-5xs);
  }
  .logo {
    position: absolute;
    height: 65%;
    top: 17.5%;
    bottom: 17.5%;
    left: calc(50% - 794.5px);
    width: 281px;
    font-size: var(--font-size-base);
  }
  .header-blue {
    position: relative;
    height: 25%;
    top: 25%;
    bottom: 24.38%;
    left: 0px;
    width: 100%;
    color: var(--color-white);
  }
  .group-inner,
  .group-item {
    position: absolute;
    top: 0;
    left: 0;
  }
  .group-item {
    height: 100%;
    width: 100%;
    right: 0;
    bottom: 0;
    background-color: var(--color-white);
  }
  .group-inner {
    border-radius: var(--br-9xs);
  }
  .frame-container {
    position: relative;
    width: 50px;
    height: 38px;
  }
  .group-wrapper {
    position: absolute;
    width: 2.87%;
    top: calc(50% - 18.38px);
    right: 6.17%;
    left: 90.96%;
    height: 33.25px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
  }
  .rectangle-group {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }
  .free-shipping-on {
    position: absolute;
    width: 30.08%;
    top: 30%;
    left: 34.96%;
    display: inline-block;
  }
  .frame-div {
    position: absolute;
    height: 100%;
    width: 53.68%;
    top: 0;
    right: 46.32%;
    bottom: 0;
    left: 0;
    border-radius: var(--br-9xs);
    background-color: var(--color-white);
    box-shadow: 0 0 16px rgba(0, 0, 0, 0.16);
  }
  .philippines-3-icon,
  .united-states-5-icon {
    position: absolute;
    top: 8px;
    left: 8px;
    width: 35px;
    height: 22px;
    object-fit: cover;
  }
  .united-states-5-icon {
    height: 78.95%;
    width: 45.26%;
    top: 21.05%;
    right: -4.21%;
    bottom: 0;
    left: 58.95%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }
  .frame-parent,
  .promotions {
    position: absolute;
    height: 54.29%;
    width: 5.45%;
    top: 22.86%;
    right: 5.16%;
    bottom: 22.86%;
    /* left: 89.45%; */
  }
  .promotions {
    height: 21.88%;
    width: 100%;
    right: 0;
    bottom: 49.38%;
    left: 0;
    text-align: center;
    font-size: 18px;
    top:0px !important
  }
  .url {
    position: relative;
    width: 0;
    height: 0;
  }
  .search-button-child {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0% !important;
    right: 0;
    left: 0;
    border-radius: var(--br-8xs);
    background-color: var(--color-white);
  }
  .all,
  .icon {
    position: relative;
  }
  .icon {
    width: 10px;
    height: 6px;
  }
  .all-parent {
    position: absolute;
    height: 100%;
    width: 8.62%;
    top: 0;
    right: 91.38%;
    bottom: 0;
    left: 0;
    border-radius: var(--br-8xs) 0 0 var(--br-8xs);
    background-color: #f3f3f3;
    display: flex;
    flex-direction: row;
    padding: var(--padding-3xs);
    box-sizing: border-box;
    align-items: center;
    justify-content: center;
    gap: var(--gap-3xs);
  }
  .search-lg-icon,
  .search-products-wrapper {
    position: absolute;
    height: 48%;
    top: 26%;
    bottom: 26%;
  }
  .search-products-wrapper {
    width: 16.13%;
    right: 72.66%;
    left: 11.21%;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .search-lg-icon {
    width: 2.96%;
    right: 2.59%;
    left: 94.46%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }
  .search-button {
    position: absolute;
    top: 109px;
    left: calc(50% - 400px);
    width: 812px;
    height: 50px;
    font-size: var(--font-size-base);
  }
  .na-account-header {
    position: absolute;
    top: 0;
    left: 0;
    background-color: var(--color-white);
    width: 100%;
    height: 355px;
    overflow: hidden;
    font-size: var(--font-size-sm);
  }
  .screenshot-2023-05-10-at-617 {
    position: absolute;
    height: 4.42%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 95.58%;
    left: 0;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
  }
  .rectangle-div {
    height: 100%;
    width: 100%;
    right: 0;
    bottom: 0;
    background-color: var(--color-darkblue);
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.04);
  }
  .rectangle-div,
  .your-one-stop-shop1 {
    position: absolute;
    top: 0;
    left: 0;
  }
  .we-offer-wholesale-container {
    position: absolute;
    top: 46px;
    left: 0;
    display: inline-block;
    width: 345px;
    height: 66px;
  }
  .copyright,
  .trp-medical {
    position: relative;
    display: flex;
    align-items: center;
    height: 9px;
    flex-shrink: 0;
  }
  .trp-medical {
    font-weight: 600;
    width: 77px;
  }
  .copyright {
    width: 61px;
  }
  .c,
  .ellipse-div {
    position: absolute;
  }
  .ellipse-div {
    top: 0;
    left: 0;
    border-radius: 50%;
    background-color: var(--color-darkblue);
    border: 0.7px solid var(--color-white);
    box-sizing: border-box;
    width: 10px;
    height: 10px;
  }
  .c {
    top: 2px;
    left: 2px;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 6px;
    height: 5px;
  }
  .ellipse-parent {
    position: relative;
    width: 10px;
    height: 10px;
    text-align: center;
    font-size: 8px;
    font-family: var(--font-montserrat);
  }
  .all-rights-reserved,
  .div {
    position: relative;
    display: flex;
    align-items: center;
    width: 32px;
    height: 11px;
    flex-shrink: 0;
  }
  .all-rights-reserved {
    width: 111px;
  }
  .privacy-and-policy,
  .trp-medical-parent {
    position: absolute;
    left: 0;
    font-size: var(--font-size-xs);
    display: flex;
    align-items: center;
  }
  .trp-medical-parent {
    top: 136px;
    flex-direction: row;
    justify-content: flex-start;
    gap: var(--gap-9xs);
  }
  .privacy-and-policy {
    top: 171px;
    width: 111px;
    height: 11px;
  }
  .your-one-stop-shop-for-your-he-parent {
    position: absolute;
    top: 0;
    left: 21px;
    width: 354px;
    height: 182px;
  }
  .company {
    position: relative;
    font-weight: 500;
  }
  .company-parent,
  .links-parent,
  .overview-parent {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: var(--gap-5xs);
  }
  .company-parent,
  .links-parent {
    position: absolute;
    top: 0;
    left: 442px;
    gap: var(--gap-5xl);
  }
  .links-parent {
    left: 625px;
  }
  .facebook-2-1-icon {
    position: relative;
    width: 40px;
    height: 40px;
    object-fit: cover;
  }
  .connect-with-us-parent,
  .facebook-2-1-parent {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    gap: var(--gap-base);
  }
  .connect-with-us-parent {
    position: absolute;
    top: 0;
    left: 818px;
    flex-direction: column;
    gap: var(--gap-5xl);
  }
  .group-child1 {
    position: absolute;
    top: 0;
    left: 0;
    border-radius: 8px;
    background-color: var(--color-white);
    width: 583px;
    height: 56px;
  }
  .enter-your-email {
    position: absolute;
    top: 16px;
    left: 29.61px;
    font-weight: 500;
    display: inline-block;
    width: 355.31px;
  }
  .line-div,
  .sign-up-wrapper {
    position: absolute;
    box-sizing: border-box;
  }
  .line-div {
    top: 8.75px;
    left: 455.64px;
    border-right: 1.5px solid rgba(0, 0, 0, 0.24);
    width: 1.5px;
    height: 38.5px;
  }
  .sign-up-wrapper {
    top: 8px;
    left: 480.9px;
    border-radius: var(--br-9xs);
    width: 79.64px;
    display: flex;
    flex-direction: row;
    padding: 8px;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .rectangle-container,
  .vector-icon {
    position: relative;
    width: 583px;
    height: 56px;
  }
  .vector-icon {
    width: 16px;
    height: 16px;
  }
  .call-us,
  .vector-parent {
    display: flex;
    align-items: center;
  }
  .call-us {
    position: relative;
    justify-content: center;
    width: 55px;
    height: 12px;
    flex-shrink: 0;
  }
  .vector-parent {
    flex-direction: row;
    justify-content: flex-start;
    gap: var(--gap-lgi);
  }
  .philippines-3-icon1 {
    position: relative;
    width: 17px;
    height: 12px;
    object-fit: cover;
  }
  .txt {
    line-break: anywhere;
    width: 100%;
  }
  .div1 {
    position: relative;
    display: flex;
    align-items: center;
    width: 124px;
    height: 35px;
    flex-shrink: 0;
  }
  .philippines-3-parent {
    height: 35px;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: var(--gap-lgi);
  }
  .united-states-4-icon {
    position: relative;
    width: 17px;
    height: 12.14px;
    object-fit: cover;
  }
  .div2,
  .united-states-4-parent {
    display: flex;
    align-items: center;
  }
  .div2 {
    position: relative;
    width: 114px;
    height: 31px;
    flex-shrink: 0;
  }
  .united-states-4-parent {
    width: 150px;
    height: 12px;
    flex-direction: row;
    justify-content: flex-start;
    gap: var(--gap-lgi);
  }
  .frame-parent2,
  .frame-parent3 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .frame-parent3 {
    gap: var(--gap-3xs);
    text-align: left;
    font-size: var(--font-size-xs);
  }
  .frame-parent2 {
    gap: 23px;
    text-align: center;
  }
  .vector-icon1 {
    position: relative;
    width: 16px;
    height: 12px;
  }
  .customerservicetprmedicalcom,
  .email-us {
    position: relative;
    display: flex;
    align-items: center;
    width: 71px;
    height: 12px;
    flex-shrink: 0;
  }
  .customerservicetprmedicalcom {
    width: 211px;
    height: 13px;
  }
  .philippines-3-group {
    width: 214px;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    gap: var(--gap-lgi);
  }
  .tprmedicalaolcom {
    position: relative;
    display: flex;
    align-items: center;
    width: 130px;
    height: 13px;
    flex-shrink: 0;
  }
  .united-states-5-parent {
    height: 12px;
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    justify-content: flex-start;
    gap: var(--gap-lgi);
  }
  .frame-parent4,
  .frame-parent5 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .frame-parent5 {
    gap: 12px;
    font-size: var(--font-size-xs);
  }
  .frame-parent4 {
    width: 244px;
    gap: var(--gap-5xl);
  }
  .vector-icon2 {
    position: relative;
    width: 9px;
    height: 13px;
  }
  .vector-container {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 26px;
  }
  .gf-unit-102-container {
    position: relative;
    display: flex;
    align-items: center;
    width: 100px;
    height: 104px;
    flex-shrink: 0;
  }
  .philippines-3-container {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: 18px;
  }
  .frame-wrapper1 {
    flex-direction: column;
    text-align: right;
    font-size: var(--font-size-xs);
  }
  .frame-parent1,
  .frame-parent6,
  .frame-wrapper1,
  .group-container {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }
  .frame-parent6 {
    width: 135px;
    flex-direction: column;
    gap: var(--gap-5xl);
  }
  .frame-parent1,
  .group-container {
    flex-direction: row;
    gap: 22px;
    color: var(--color-white);
  }
  .group-container {
    position: absolute;
    top: 0;
    right: 0px;
    flex-direction: column;
    gap: 42px;
    font-size: var(--font-size-base);
    color: var(--color-black);
  }
  .frame-group {
    position: absolute;
    height: 35.04%;
    width: 93.29%;
    top: 43.26%;
    right: 3.33%;
    bottom: 21.7%;
    left: 3.38%;
  }
  .viber-image-2023-04-26-22-14-0-icon1 {
    position: absolute;
    height: 14.66%;
    width: 6.36%;
    top: 17.01%;
    right: 46.79%;
    bottom: 68.33%;
    left: 46.85%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
  }
  .footer,
  .footer-juan {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 682px;
  }
  .footer-juan {
    height: 100%;
    width: 100%;
    right: 0;
    bottom: 0;
    background-color: var(--color-white);
    overflow: hidden;
  }
  .no-account-footer {
    position: absolute;
    bottom: 0px;
    left: 0;
    width: 100%;
    height: 682px;
    font-size: 14.62px;
    color: var(--color-white);
  }
  .nav-menu-signed-out-child {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-color: var(--color-white);
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.08);
  }
  .contact-us1 {
    position: absolute;
    top: 0;
    left: 839px;
    cursor: pointer;
  }
  .about,
  .brands1,
  .markets-we-serve,
  .news {
    position: absolute;
    top: 0;
    left: 166px;
  }
  .about,
  .brands1,
  .news {
    left: 407px;
  }
  .about,
  .news {
    left: 558px;
    cursor: pointer;
  }
  .about {
    left: 696px;
  }
  .be-a-local-dealer-wrapper {
    position: absolute;
    width: 11.81%;
    top: calc(50% - 12px);
    right: 0;
    left: 88.19%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
    cursor: pointer;
  }
  .contact-us-parent {
    position: absolute;
    top: 28px;
    left: calc(50% - 600px);
    width: 1160px;
    height: 24px;
  }
  .nav-menu-signed-out {
    position: absolute;
    top: 180px;
    left: 0;
    width: 100%;
    height: 80px;
    font-size: var(--font-size-base);
  }
  .na-about-us-menu {
    position: relative;
    background-color: var(--color-white);
    width: 100%;
    height: 1150px;
    text-align: left;
    font-size: 26px;
    color: var(--color-black);
    font-family: var(--font-poppins);
  }
  .screen-shot-2021-10-27-at-131 {
    position: absolute;
    top: -7px;
    left: 0;
    width: 2004px;
    height: 527px;
    object-fit: cover;
    display: none;
  }
  .syringes-without-needle {
    position: absolute;
    top: 0;
    left: 0;
  }
  .syringes-with-needle,
  .table-paper {
    position: absolute;
    top: 56px;
    left: 0;
  }
  .table-paper {
    top: 111px;
  }
  .tourniquet,
  .urinary-drainage-bag {
    position: absolute;
    top: 167px;
    left: 0;
  }
  .urinary-drainage-bag {
    top: 222px;
  }
  .syringes-without-needle-parent {
    position: absolute;
    top: 82px;
    left: 1482px;
    width: 180px;
    height: 245px;
  }
  .antiseptics {
    position: absolute;
    top: 0;
    left: 0;
    cursor: pointer;
  }
  .dead-end-caps,
  .diagnostics {
    position: absolute;
    top: 278px;
    left: 0;
  }
  .diagnostics {
    top: 333px;
  }
  .antiseptics-parent {
    position: absolute;
    top: 82px;
    left: 320px;
    width: 197px;
    height: 356px;
  }
  .disposable-underpads-drapes-parent,
  .medi-cut-scalpels-disposable-parent {
    position: absolute;
    top: 82px;
    left: 631px;
    width: 394px;
    height: 356px;
  }
  .medi-cut-scalpels-disposable-parent {
    left: 1139px;
    width: 229px;
  }
  .brands-drop-down-child {
    position: absolute;
    top: 1px;
    left: 0;
    width: 1920.5px;
    height: 0;
    display: none;
  }
  .dynarex {
    top: 137px;
    color: var(--color-darkblue);
  }
  .dukal,
  .dynarex,
  .shop-all-brands {
    position: absolute;
    left: 78px;
  }
  .dukal {
    top: 192px;
    color: var(--color-silver);
  }
  .shop-all-brands {
    top: 82px;
    text-decoration: underline;
    cursor: pointer;
  }
  .emerald,
  .nipro,
  .rockwell-medical,
  .tpr-medical {
    position: absolute;
    top: 247px;
    left: 78px;
    color: var(--color-silver);
  }
  .emerald,
  .nipro,
  .tpr-medical {
    top: 302px;
  }
  .nipro,
  .tpr-medical {
    top: 357px;
  }
  .nipro {
    top: 412px;
  }
  .noun-long-arrow-1337191-1-icon {
    position: absolute;
    top: 130px;
    left: 154px;
    width: 35px;
    height: 35px;
    overflow: hidden;
  }
  .a-link{
    color: black;
    text-decoration: none;
  }
  .brands-drop-down {
    position: absolute;
    top:265px;
    background-color: var(--color-white);
    box-shadow: 0-2px 8px rgba(0, 0, 0, 0.1);
    border: 1px solid var(--color-white);
    box-sizing: border-box;
    width: 100%;
    height: 520px;
    overflow: hidden;
    max-height: 90%;
    text-align: left;
    font-size: var(--font-size-mini);
    color: var(--color-black);
    font-family: var(--font-poppins);
  }
  .screen-shot-2021-10-27-at-1311 {
    position: absolute;
    top: -7px;
    left: 0;
    width: 2004px;
    height: 527px;
    object-fit: cover;
    display: none;
  }
  .markets-we-serve-drop-down-child {
    position: absolute;
    top: 1px;
    left: 0;
    width: 1920.5px;
    height: 0;
    display: none;
  }
  .shop-all-markets {
    position: absolute;
    top: 0;
    left: 0;
    text-decoration: underline;
  }
  .athletic-sports {
    position: absolute;
    top: 55px;
    left: 0;
    cursor: pointer;
  }
  .cosmetic-surgery,
  .dental,
  .dialysis {
    position: absolute;
    top: 110px;
    left: 0;
  }
  .dental,
  .dialysis {
    top: 165px;
  }
  .dialysis {
    top: 220px;
  }
  .diagnostics-laboratory,
  .dme-durable-medical {
    position: absolute;
    top: 275px;
    left: 0;
  }
  .dme-durable-medical {
    top: 330px;
  }
  .shop-all-markets-we-serve-parent {
    position: absolute;
    top: 82px;
    left: 78px;
    width: 256px;
    height: 353px;
  }
  .home-personal,
  .hospital-emergency {
    position: absolute;
    top: 55px;
    left: 0;
  }
  .home-personal {
    top: 0;
  }
  .nursing-home-parent,
  .urgent-care-parent {
    position: absolute;
    top: 82px;
    left: 478px;
    width: 277px;
    height: 298px;
  }
  .urgent-care-parent {
    left: 899px;
    width: 168px;
  }
  .markets-we-serve-drop-down-item {
    position: absolute;
    top: 82px;
    left: 1211px;
    border-radius: var(--br-6xs);
    width: 455px;
    height: 371px;
    object-fit: cover;
  }
  .shop-our-gloves {
    position: relative;
    font-weight: 500;
  }
  .shop-our-gloves-section-wrapper {
    position: absolute;
    top: 384px;
    left: 1237px;
    border-radius: var(--br-6xs);
    background-color: var(--color-white);
    display: flex;
    flex-direction: row;
    padding: var(--padding-3xs);
    align-items: flex-start;
    justify-content: flex-start;
  }
  .markets-we-serve-drop-down {
    position: absolute;
    top: 265px;
    background-color: var(--color-white);
    box-shadow: 0-2px 8px rgba(0, 0, 0, 0.1);
    border: 1px solid var(--color-white);
    box-sizing: border-box;
    width: 1744px;
    height: 520px;
    overflow: hidden;
    max-width: 90%;
    max-height: 90%;
    text-align: left;
    font-size: var(--font-size-mini);
    color: var(--color-black);
    font-family: var(--font-poppins);
  }
  .screen-shot-2021-10-27-at-1312 {
    position: absolute;
    top: -7px;
    left: 0;
    width: 2004px;
    height: 527px;
    object-fit: cover;
    display: none;
  }
  .antiseptics1 {
    position: absolute;
    top: 0;
    left: 0;
    cursor: pointer;
  }
  .applicators,
  .blood-collection {
    position: absolute;
    top: 55px;
    left: 0;
  }
  .blood-collection {
    top: 165px;
  }
  .customized-medical-kits,
  .dressing-and-sponges {
    position: absolute;
    top: 220px;
    left: 0;
  }
  .dressing-and-sponges {
    top: 275px;
  }
  .antiseptics-group {
    position: absolute;
    top: 82px;
    left: 445px;
    width: 234px;
    height: 298px;
  }
  .infection-control,
  .sterilization {
    position: absolute;
    top: 0;
    left: 0;
  }
  .sterilization {
    top: 110px;
  }
  .infection-control-parent {
    position: absolute;
    top: 82px;
    left: 810px;
    width: 125px;
    height: 243px;
  }
  .products-drop-down-1-child {
    position: absolute;
    top: 1px;
    left: 0;
    width: 1920.5px;
    height: 0;
    display: none;
  }
  .disposable-medical-supplies,
  .durable-medical-equipment {
    position: absolute;
    top: 137px;
    left: 78px;
    color: var(--color-darkblue);
  }
  .durable-medical-equipment {
    top: 192px;
    color: var(--color-silver);
  }
  .shop-all-products {
    position: absolute;
    top: 82px;
    left: 78px;
    text-decoration: underline;
    cursor: pointer;
  }
  .noun-long-arrow-1337191-1-icon1 {
    position: absolute;
    top: 132px;
    left: 309px;
    width: 35px;
    height: 35px;
    overflow: hidden;
  }
  .group-child {
    position: absolute;
    top: 0;
    left: 0;
    border-radius: var(--br-6xs);
    width: 455px;
    height: 371px;
    object-fit: cover;
  }
  .shop-our-bandages {
    position: relative;
    font-weight: 500;
  }
  .shop-our-bandages-wrapper {
    position: absolute;
    top: 302px;
    left: 26px;
    border-radius: var(--br-6xs);
    background-color: var(--color-white);
    display: flex;
    flex-direction: row;
    padding: var(--padding-3xs);
    align-items: flex-start;
    justify-content: flex-start;
  }
  .products-drop-down-1-inner,
  .rectangle-parent {
    position: absolute;
    top: 0;
    left: 0;
    width: 455px;
    height: 371px;
  }
  .products-drop-down-1-inner {
    top: 82px;
    left: 1211px;
  }
  .products-drop-down-1 {
    position: absolute;
    top: 265px;
    background-color: var(--color-white);
    box-shadow: 0-2px 8px rgba(0, 0, 0, 0.1);
    border: 1px solid var(--color-white);
    box-sizing: border-box;
    width: 100%;
    height: 520px;
    overflow: hidden;
    max-height: 90%;
    text-align: left;
    font-size: var(--font-size-mini);
    color: var(--color-black);
    font-family: var(--font-poppins);
  }
  
</style>