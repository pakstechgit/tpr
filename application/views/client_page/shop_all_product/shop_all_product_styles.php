<style>
    a:visited {
        text-decoration: none;
        color: #000;
    }

    .group-item {
        position: absolute;
        top: 0;
        left: 0;
        background-color: var(--color-darkblue);
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.04);
    }

    .footer-inner,
    .group-item {
        height: 100%;
        width: 100%;
        right: 0;
        bottom: 0;
    }

    .footer-inner,
    .your-one-stop-shop {
        position: absolute;
        top: 0;
        left: 0;
    }

    .we-offer-wholesale {
        margin: 0;
    }

    .we-offer-wholesale-container {
        position: absolute;
        top: 46px;
        left: 0;
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
    .group-inner {
        position: absolute;
    }

    .group-inner {
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
        font-size: var(--font-size-5xs);
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
        font-weight: 500;
    }

    .company,
    .overview {
        position: relative;
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

    .rectangle-div {
        position: absolute;
        top: 0;
        left: 0;
        border-radius: var(--br-5xs);
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
        border-right: 1.5px solid var(--color-gray-200);
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
        padding: var(--padding-5xs);
        align-items: flex-start;
        justify-content: flex-start;
    }

    .rectangle-group,
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

    .philippines-3-icon {
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
        gap: var(--gap-4xl);
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
        gap: var(--gap-xs);
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
        gap: var(--gap-7xl);
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
        gap: var(--gap-lg);
    }

    .frame-wrapper1 {
        flex-direction: column;
        text-align: right;
        font-size: var(--font-size-xs);
    }

    .frame-parent1,
    .frame-parent6,
    .frame-wrapper1,
    .group-parent {
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
    .group-parent {
        flex-direction: row;
        gap: var(--gap-3xl);
        color: var(--color-white);
    }

    .group-parent {
        position: absolute;
        top: 0;
        left: 1022px;
        flex-direction: column;
        gap: var(--gap-23xl);
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
        left: 6.38%;
    }

    .viber-image-2023-04-26-22-14-0-icon {
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
    .no-account-footer {
        position: absolute;
        top: 0;
        left: 0;
        width: 1740px;
        height: 682px;
    }

    .no-account-footer {
        top: 8188px;
        left: 2px;
        background-color: var(--color-white);
        width: 1744px;
        overflow: hidden;
        font-size: 14.62px;
        color: var(--color-white);
    }

    .juan-shop-all-products-child {
        position: absolute;
        top: 1557px;
        left: 251px;
        background-color: var(--color-black);
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
        width: 1243px;
        height: 0;
    }

    .home-products {
        position: absolute;
        top: 400px;
        left: 77px;
        font-size: var(--font-size-2xs);
        font-weight: 500;
        color: #9f9f9f;
    }

    .shop-all-products1 {
        position: absolute;
        top: 400px;
        left: 420px;
        font-size: var(--font-size-3xl);
        font-weight: 600;
    }

    .product-parent {
        position: relative;
        width: 100%;
    }

    .sterile-nitrile-exam {
        position: absolute;
        top: 370px;
        left: 3px;
        font-weight: 600;
    }

    .dynarex1 {
        position: absolute;
        top: 391px;
        left: 3px;
        font-size: var(--font-size-smi);
        color: var(--color-gray-100);
    }

    .div3,
    .rectangle-icon {
        position: absolute;
        top: 0;
    }

    .rectangle-icon {
        left: 3px;
        width: 360px;
        height: 360px;
        object-fit: cover;
    }

    .div3 {
        left: 15px;
        font-weight: 600;
    }

    .currencyphilippine-peso-php {
        position: absolute;
        top: 2px;
        left: 0;
        width: 15px;
        height: 15px;
        overflow: hidden;
    }

    .parent {
        position: absolute;
        top: 0;
        left: 0;
        width: 120px;
        height: 21px;
    }

    .sizes-available {
        position: absolute;
        top: 20px;
        left: 3px;
        font-size: var(--font-size-2xs);
    }

    .group-div {
        position: absolute;
        top: 421px;
        left: 0;
        width: 120px;
        height: 37px;
    }

    .sterile-nitrile-exam-gloves-p-group,
    .sterile-nitrile-exam-gloves-p-parent {
        position: absolute;
        top: 531px;
        left: 866px;
        width: 363px;
        height: 458px;
    }

    .sterile-nitrile-exam-gloves-p-group {
        left: 1304px;
    }

    .powder-free-nitrile-exam {
        position: absolute;
        top: 0;
        left: 0;
        font-weight: 600;
    }

    .emerald1 {
        position: absolute;
        top: 20px;
        left: 0;
        color: var(--color-gray-100);
    }

    .only-large {
        position: absolute;
        top: 21px;
        left: 3px;
        font-size: var(--font-size-2xs);
    }

    .group-parent2 {
        position: absolute;
        top: 51px;
        left: 0;
        width: 120px;
        height: 38px;
    }

    .powder-free-nitrile-exam-glove-parent {
        position: absolute;
        top: 901px;
        left: 423px;
        width: 231px;
        height: 89px;
    }

    .sterile-nitrile-exam-gloves-p-container,
    .sterile-nitrile-exam-gloves-p-parent1 {
        position: absolute;
        top: 0;
        left: 443px;
        width: 363px;
        height: 458px;
    }

    .sterile-nitrile-exam-gloves-p-parent1 {
        left: 881px;
    }

    .emerald2 {
        position: absolute;
        top: 390px;
        left: 0;
        color: var(--color-gray-100);
    }

    .group-child4 {
        position: absolute;
        top: 0;
        left: 0;
        width: 360px;
        height: 360px;
        object-fit: cover;
    }

    .group-parent6 {
        position: absolute;
        top: 421px;
        left: 0;
        width: 120px;
        height: 38px;
    }

    .group-parent3,
    .powder-free-nitrile-exam-glove-group {
        position: absolute;
        top: 0;
        left: 0;
        width: 360px;
        height: 459px;
    }

    .group-parent3 {
        top: 1035px;
        left: 423px;
        width: 1244px;
    }

    .vinyl {
        position: absolute;
        top: 1539px;
        left: 420px;
        font-size: var(--font-size-3xl);
    }

    .relevance,
    .sort-by {
        position: absolute;
        top: 408px;
        left: 1489px;
    }

    .relevance {
        left: 1558px;
        color: gray;
    }

    .products1 {
        position: absolute;
        top: 424px;
        left: 76px;
        font-size: var(--font-size-3xl);
        font-weight: 600;
    }

    .shop-all-products2 {
        position: absolute;
        top: 462px;
        left: 77px;
    }

    .icon9,
    .product-details-hover-child {
        position: absolute;
        height: 0.5%;
        width: 1.26%;
        top: 11.63%;
        right: 5.05%;
        bottom: 87.87%;
        left: 93.69%;
        max-width: 100%;
        overflow: hidden;
        max-height: 100%;
    }

    .product-details-hover-child {
        height: 100%;
        width: 100%;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        object-fit: cover;
    }

    .product-details-hover {
        position: absolute;
        top: 530px;
        left: 423px;
        width: 360px;
        height: 360px;
    }

    .vinyl1 {
        position: absolute;
        top: 0;
        left: 0;
        font-size: var(--font-size-3xl);
    }

    .dynarex5 {
        position: absolute;
        top: 390px;
        left: 3px;
        color: var(--color-gray-100);
    }

    .safe-touch-vinyl-exam-gloves-parent {
        position: absolute;
        top: 58px;
        left: 443px;
        width: 363px;
        height: 458px;
    }

    .syntheticare-powder-free-vinyl {
        position: absolute;
        top: 370px;
        left: 0;
        font-weight: 600;
    }

    .emerald3 {
        position: absolute;
        top: 391px;
        left: 0;
        color: var(--color-gray-100);
    }

    .group-parent8 {
        position: absolute;
        top: 422px;
        left: 0;
        width: 120px;
        height: 38px;
    }

    .syntheticare-powder-free-vinyl-parent {
        position: absolute;
        top: 58px;
        left: 3px;
        width: 360px;
        height: 460px;
    }

    .blue-background,
    .vinyl-parent {
        position: absolute;
        top: 1539px;
        left: 420px;
        width: 806px;
        height: 518px;
    }

    .blue-background {
        top: 0;
        left: 0;
        background-color: var(--color-darkblue);
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.04);
        width: 100%;
        height: 80px;
    }

    .frame-item {
        cursor: pointer;
    }

    .frame-wrapper3 {
        position: absolute;
        height: 100%;
        top: 0;
        bottom: 0;
        left: calc(50% - 140.5px);
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
    }

    .frame-wrapper2 {
        position: relative;
        width: 281px;
        height: 52px;
    }

    .header-blue-inner {
        position: absolute;
        top: 5px;
        left: 78px;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
    }

    .juan,
    .user-03-icon,
    .welcome {
        position: relative;
        flex-shrink: 0;
    }

    .user-03-icon {
        width: 35px;
        height: 35px;
        overflow: hidden;
    }

    .juan,
    .welcome {
        display: flex;
        align-items: center;
        width: 76px;
        height: 14px;
    }

    .juan {
        font-size: var(--font-size-xs);
        width: 106px;
    }

    .user-03-parent,
    .welcome-parent {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        gap: var(--gap-9xs);
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

    .frame-inner,
    .frame-wrapper4 {
        position: relative;
        width: 130px;
        height: 35px;
    }

    .frame-inner {
        border-right: 1px solid var(--color-white);
        box-sizing: border-box;
        width: 1px;
        height: 46px;
    }

    .heart-icon {
        position: relative;
        width: 32px;
        height: 32px;
        overflow: hidden;
        flex-shrink: 0;
    }

    .group-parent9,
    .heart-parent {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
    }

    .heart-parent {
        align-items: flex-start;
        gap: var(--gap-base);
    }

    .group-parent9 {
        position: absolute;
        width: 100%;
        top: calc(50% - 22.5px);
        right: 0;
        left: 0;
        align-items: center;
        gap: 32px;
    }

    .header-right {
        position: absolute;
        width: 96.96%;
        top: calc(50% - 22px);
        right: 3.04%;
        left: 0;
        height: 45px;
    }

    .div11,
    .ellipse-div {
        position: absolute;
        top: 0;
    }

    .ellipse-div {
        height: 39.13%;
        width: 6.37%;
        right: 0;
        bottom: 60.87%;
        left: 93.63%;
        border-radius: 50%;
        background-color: #ff7a00;
    }

    .div11 {
        left: 95.4%;
        font-size: var(--font-size-xs);
        font-weight: 500;
    }

    .header-right-parent {
        position: absolute;
        width: 16.2%;
        top: calc(50% - 23px);
        right: 4.67%;
        left: 79.13%;
        height: 46px;
    }

    .header-blue {
        position: absolute;
        top: 162px;
        left: 0;
        width: 100%;
        height: 80px;
        font-size: var(--font-size-sm);
    }

    .viber-image-2023-04-26-22-14-0-icon1 {
        position: absolute;
        top: 176px;
        left: 77px;
        width: 58px;
        height: 52px;
        object-fit: cover;
    }

    .group-child7,
    .your-one-stop-shop-container {
        position: absolute;
        top: 178px;
        left: 143px;
    }

    .group-child7 {
        height: 100%;
        width: 100%;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: var(--color-white);
    }

    .group-child8 {
        position: absolute;
        height: 51.25%;
        width: 5.61%;
        top: 23.75%;
        right: 4.66%;
        bottom: 25%;
        left: 89.73%;
    }

    .free-shipping-on {
        position: absolute;
        width: 30.08%;
        top: 30%;
        left: 34.96%;
        display: inline-block;
    }

    .group-child9 {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        border-radius: var(--br-9xs);
        background-color: var(--color-white);
        box-shadow: 0 0 16px rgba(0, 0, 0, 0.16);
    }

    .philippines-3-icon3 {
        position: absolute;
        top: 8px;
        left: 8px;
        width: 35px;
        height: 22px;
        object-fit: cover;
    }

    .frame-parent7,
    .united-states-5-icon1 {
        position: absolute;
        height: 100%;
        width: 53.68%;
        top: 0;
        right: 46.32%;
        bottom: 0;
        left: 0;
    }

    .united-states-5-icon1 {
        height: 78.95%;
        width: 45.26%;
        top: 21.05%;
        right: -4.21%;
        left: 58.95%;
        max-width: 100%;
        overflow: hidden;
        max-height: 100%;
        object-fit: cover;
    }

    .group-parent10,
    .promotions {
        position: absolute;
        height: 54.29%;
        width: 5.45%;
        top: 22.86%;
        right: 5.1%;
        bottom: 22.86%;
        left: 89.45%;
    }

    .promotions {
        height: 21.88%;
        width: 100%;
        top: 28.75%;
        right: 0;
        bottom: 49.38%;
        left: 0;
        text-align: center;
        font-size: 18px;
        color: var(--color-black);
    }

    .url {
        position: relative;
        width: 0;
        height: 0;
    }

    .juan-search-button-child {
        position: absolute;
        height: 100%;
        width: 100%;
        /* top: 100%; */
        right: 0;
        /* bottom: -100%; */
        left: 0;
        border-radius: var(--br-8xs);
        background-color: var(--color-white);
    }

    .icon10 {
        position: relative;
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
        background-color: var(--color-whitesmoke);
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

    .header-juan,
    .juan-search-button {
        position: absolute;
        top: 177px;
        left: 467px;
        width: 812px;
        height: 50px;
        color: var(--color-black);
    }

    .header-juan {
        top: 0;
        left: 0;
        background-color: var(--color-white);
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
        width: 100%;
        height: 320px;
        overflow: hidden;
        font-size: var(--font-size-base);
        color: var(--color-white);
        margin-top: -70px;
    }

    .juan-shop-all-products-inner {
        position: absolute;
        top: 2204.75px;
        left: calc(50% - 792px);
        width: 1585px;
        height: 0.5px;
    }

    .category {
        position: absolute;
        top: 0;
        left: 0;
        font-weight: 600;
        color: var(--color-black);
    }

    .athletic3,
    .cosmetic-surgery4 {
        position: absolute;
        top: 31px;
        left: 1px;
        cursor: pointer;
    }

    .cosmetic-surgery4 {
        top: 64px;
    }

    .customized-medical-kits4,
    .dental5,
    .diagnostics-laboratory5 {
        position: absolute;
        top: 97px;
        left: 1px;
        cursor: pointer;
    }

    .dental5,
    .diagnostics-laboratory5 {
        top: 130px;
    }

    .diagnostics-laboratory5 {
        top: 163px;
    }

    .dialysis3,
    .dme-durable-medical3 {
        position: absolute;
        top: 196px;
        left: 1px;
    }

    .dme-durable-medical3 {
        top: 229px;
    }

    .drug-wholesale2,
    .emergency2,
    .gloves3 {
        position: absolute;
        top: 262px;
        left: 1px;
    }

    .emergency2,
    .gloves3 {
        top: 295px;
    }

    .gloves3 {
        top: 328px;
    }

    .home-personal3,
    .hospital2 {
        position: absolute;
        top: 361px;
        left: 1px;
    }

    .hospital2 {
        top: 394px;
    }

    .nursing-home3,
    .view-more1 {
        position: absolute;
        top: 427px;
        left: 1px;
    }

    .view-more1 {
        top: 0;
        left: 0;
        font-weight: 600;
    }

    .view-more {
        position: absolute;
        top: 467px;
        left: 1px;
        width: 99px;
        height: 21px;
        font-size: var(--font-size-base);
    }

    .filter-by {
        top: 0;
        font-size: var(--font-size-3xl);
        font-weight: 600;
        color: var(--color-black);
    }

    .colors,
    .filter-by,
    .group-child10 {
        position: absolute;
        left: 0;
    }

    .colors {
        top: 550px;
        font-weight: 600;
        color: var(--color-black);
    }

    .group-child10 {
        top: 49.5px;
        width: 287px;
        height: 1px;
    }

    .group-child12,
    .group-child13,
    .group-child14,
    .group-child15 {
        position: absolute;
        top: 532.5px;
        left: 0;
        width: 287px;
        height: 1px;
    }

    .group-child13,
    .group-child14,
    .group-child15 {
        top: 218.5px;
    }

    .group-child14,
    .group-child15 {
        top: 407.5px;
    }

    .group-child15 {
        top: 657.5px;
    }

    .material {
        position: absolute;
        top: 67px;
        left: 0;
        font-weight: 600;
        color: var(--color-black);
    }

    .latex,
    .nitrile {
        position: absolute;
        top: 38px;
        left: 0;
        display: inline-block;
        width: 211px;
    }

    .nitrile {
        top: 0;
    }

    .latex-parent,
    .vinyl-wrapper {
        position: absolute;
        top: 105px;
        left: 25px;
        width: 211px;
        height: 59px;
    }

    .vinyl-wrapper {
        top: 181px;
        width: 189px;
        height: 21px;
    }

    .small {
        position: absolute;
        top: 0;
        left: 0;
        display: inline-block;
        width: 155px;
    }

    .medium-wrapper,
    .small-wrapper {
        position: absolute;
        top: 38px;
        left: 25px;
        width: 155px;
        height: 21px;
    }

    .medium-wrapper {
        top: 70px;
        width: 211px;
    }

    .large {
        position: absolute;
        top: 0;
        left: 0;
        display: inline-block;
        width: 189px;
    }

    .large-wrapper,
    .size-parent,
    .x-large-wrapper {
        position: absolute;
        top: 102px;
        left: 25px;
        width: 189px;
        height: 21px;
    }

    .size-parent,
    .x-large-wrapper {
        top: 134px;
    }

    .size-parent {
        top: 236px;
        left: 0;
        width: 236px;
        height: 155px;
    }

    .blue-parent,
    .transparent {
        position: absolute;
        top: 32px;
        left: 0;
    }

    .blue-parent {
        top: 588px;
        left: 25px;
        width: 86px;
        height: 53px;
    }

    .brand-parent,
    .dynarex-wrapper,
    .emerald-wrapper {
        position: absolute;
        top: 38px;
        left: 25px;
        width: 57px;
        height: 21px;
    }

    .brand-parent,
    .emerald-wrapper {
        top: 70px;
        width: 58px;
    }

    .brand-parent {
        top: 425px;
        left: 0;
        width: 83px;
        height: 91px;
    }

    .filter-by-parent {
        position: absolute;
        top: 540px;
        left: 1px;
        width: 287px;
        height: 658px;
    }

    .chekbox-icon,
    .chekbox-icon1,
    .chekbox-icon2 {
        position: absolute;
        top: 686px;
        left: 0;
        width: 14.7px;
        height: 14.7px;
    }

    .chekbox-icon1,
    .chekbox-icon2 {
        top: 648px;
        left: 1px;
    }

    .chekbox-icon2 {
        top: 724px;
    }

    .chekbox-icon3,
    .chekbox-icon4,
    .chekbox-icon5,
    .chekbox-icon6 {
        position: absolute;
        top: 849px;
        left: 0;
        width: 14.7px;
        height: 14.7px;
    }

    .chekbox-icon4,
    .chekbox-icon5,
    .chekbox-icon6 {
        top: 817px;
    }

    .chekbox-icon5,
    .chekbox-icon6 {
        top: 881px;
        left: 1px;
    }

    .chekbox-icon6 {
        top: 913px;
        left: 0;
    }

    .chekbox-icon10,
    .chekbox-icon7,
    .chekbox-icon8,
    .chekbox-icon9 {
        position: absolute;
        top: 1006px;
        left: 1px;
        width: 14.7px;
        height: 14.7px;
    }

    .chekbox-icon10,
    .chekbox-icon8,
    .chekbox-icon9 {
        top: 1038px;
    }

    .chekbox-icon10,
    .chekbox-icon9 {
        top: 1131px;
    }

    .chekbox-icon10 {
        top: 1163px;
    }

    .juan-view-moreview-less {
        position: absolute;
        top: 511px;
        left: 77px;
        width: 288px;
        height: 1198px;
        color: var(--color-darkslategray);
    }

    .span {
        font-weight: 500;
    }

    .tpr-local-dealer {
        font-weight: 600;
    }

    .become-a-tpr-container {
        position: relative;
        display: flex;
        align-items: center;
        width: 564px;
        height: 46px;
        flex-shrink: 0;
    }

    .lorem-ipsum-dolor-container {
        position: relative;
        font-size: var(--font-size-base);
        /* white-space: pre-wrap; */
        display: flex;
        align-items: center;
        width: 656px;
    }

    .become-a-tpr-local-dealer-parent {
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        gap: 64px;
    }

    .get-started1 {
        position: relative;
        font-weight: 600;
    }

    .get-started {
        position: absolute;
        top: 294px;
        left: 0;
        border-radius: var(--br-3xs);
        background-color: var(--color-white);
        border: 1.5px solid var(--color-darkgray-100);
        box-sizing: border-box;
        width: 140px;
        display: flex;
        flex-direction: row;
        padding: var(--padding-base) 83px;
        align-items: center;
        justify-content: center;
        font-size: var(--font-size-xs);
    }

    .frame-parent8 {
        position: relative;
        width: 656px;
        height: 344px;
    }

    .news-letter-inner {
        position: absolute;
        height: 100%;
        width: 48.16%;
        top: 0;
        right: -0.02%;
        bottom: 0;
        left: 51.85%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
    }

    .weekly-newsletter-about-container {
        position: relative;
        font-weight: 500;
        display: flex;
        align-items: center;
        width: 564px;
        height: 60px;
        flex-shrink: 0;
    }

    .login-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        border-radius: var(--br-5xs);
        background-color: var(--color-white);
        border: 1.5px solid #dbdbdc;
        box-sizing: border-box;
        width: 572px;
        display: flex;
        flex-direction: row;
        padding: var(--padding-3xs) 35px var(--padding-3xs) 24px;
        align-items: center;
        justify-content: flex-start;
    }

    .frame-wrapper5 {
        position: relative;
        width: 572px;
        height: 56px;
        color: var(--color-white);
    }

    .square-icon {
        position: relative;
        width: 24px;
        height: 24px;
        overflow: hidden;
        flex-shrink: 0;
    }

    .i-consent-tpr,
    .square-parent {
        display: flex;
        align-items: center;
    }

    .i-consent-tpr {
        position: relative;
        width: 487px;
        flex-shrink: 0;
    }

    .square-parent {
        position: absolute;
        top: 0;
        left: 0;
        flex-direction: row;
        justify-content: flex-start;
        gap: var(--gap-base);
    }

    .frame-wrapper6 {
        position: relative;
        width: 527px;
        height: 24px;
        font-size: var(--font-size-base);
    }

    .weekly-newsletter-about-our-la-parent {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        gap: 40px;
    }

    .mail-02-icon {
        position: relative;
        width: 16px;
        height: 16px;
        overflow: hidden;
        flex-shrink: 0;
    }

    .subscribe {
        border-radius: var(--br-3xs);
        background-color: var(--color-white);
        border: 1.5px solid var(--color-darkgray-100);
        box-sizing: border-box;
        width: 116px;
        height: 34px;
        display: flex;
        flex-direction: row;
        padding: var(--padding-base) 0;
        align-items: center;
        justify-content: center;
        gap: var(--gap-3xs);
    }

    .subscribe-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        flex-direction: column;
        padding: var(--padding-3xs);
        align-items: flex-start;
        justify-content: flex-start;
    }

    .frame-wrapper8 {
        position: relative;
        width: 135.69px;
        height: 54px;
        color: var(--color-black);
    }

    .enter-your-email-address-parent,
    .frame-wrapper7 {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: flex-start;
    }

    .enter-your-email-address-parent {
        gap: 250px;
    }

    .frame-wrapper7 {
        position: absolute;
        height: 16.27%;
        width: 93.43%;
        top: 64.77%;
        right: 3.27%;
        bottom: 18.96%;
        left: 3.3%;
        font-size: var(--font-size-xs);
        color: rgba(0, 0, 0, 0.4);
    }

    .frame-parent9 {
        position: absolute;
        height: 95.21%;
        width: 42.2%;
        top: 3.15%;
        right: 57.8%;
        bottom: 1.64%;
        left: 0;
    }

    .news-letter {
        position: absolute;
        top: 2187px;
        left: 191px;
        width: 1362px;
        height: 344px;
        font-size: var(--font-size-5xl);
    }

    .we-offer-wholesale-container1 {
        position: absolute;
        top: 46px;
        left: 0;
        display: inline-block;
        width: 345px;
        height: 66px;
    }

    .overview1 {
        position: relative;
        cursor: pointer;
    }

    .footer1 {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 682px;
    }

    .footer-juan,
    .nav-menu-signed-out-child {
        position: absolute;
        left: 0;
        background-color: var(--color-white);
    }

    .footer-juan {
        top: 2679px;
        width: 100%;
        height: 682px;
        overflow: hidden;
        font-size: 14.62px;
        color: var(--color-white);
    }

    .nav-menu-signed-out-child {
        height: 100%;
        width: 100%;
        top: 0;
        right: 0;
        bottom: 0;
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.08);
    }

    .contact-us2 {
        position: absolute;
        top: 0;
        left: 839px;
        cursor: pointer;
    }

    .about,
    .brands2,
    .markets-we-serve,
    .news {
        position: absolute;
        top: 0;
        left: 166px;
    }

    .about,
    .brands2,
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
        left: 292px;
        width: 1160px;
        height: 24px;
    }

    .nav-menu-signed-out {
        position: absolute;
        top: 240px;
        left: 0;
        width: 100%;
        height: 80px;
        font-size: var(--font-size-base);
        margin-top: -66px;
    }

    .screenshot-2023-05-10-at-617 {
        position: absolute;
        height: 2.31%;
        width: 100%;
        top: 0;
        right: 0;
        bottom: 97.69%;
        left: 0;
        max-width: 100%;
        overflow: hidden;
        max-height: 100%;
        object-fit: cover;
    }

    .juan-shop-all-products {
        position: inherit;
        display: block;
        background-color: var(--color-white);
        width: 1920px;
        height: 3000px;
        overflow: hidden;
        text-align: left;
        font-size: var(--font-size-sm);
        color: var(--color-black);
        font-family: var(--font-poppins);
        z-index: -12;
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

    .brands-drop-down {
        position: absolute;
        top: 244px;
        background-color: var(--color-white);
        box-shadow: 0-2px 8px rgba(0, 0, 0, 0.1);
        border: 1px solid var(--color-white);
        box-sizing: border-box;
        width: 100%;
        height: 520px;
        overflow: hidden;
        max-width: 100%;
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
        top: 244px;
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

    .products-drop-down-4-child {
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

    .products-drop-down-4-inner,
    .rectangle-parent {
        position: absolute;
        top: 0;
        left: 0;
        width: 455px;
        height: 371px;
    }

    .products-drop-down-4-inner {
        top: 82px;
        left: 1211px;
    }

    .products-drop-down-4 {
        position: absolute;
        top: 244px;
        background-color: var(--color-white);
        box-shadow: 0-2px 8px rgba(0, 0, 0, 0.1);
        border: 1px solid var(--color-white);
        box-sizing: border-box;
        width: 100%;
        height: 520px;
        overflow: hidden;
        max-width: 100%;
        max-height: 90%;
        text-align: left;
        font-size: var(--font-size-mini);
        color: var(--color-black);
        font-family: var(--font-poppins);
    }

    .athletic,
    .cosmetic-surgery1 {
        position: absolute;
        top: 0;
        left: 0;
    }

    .cosmetic-surgery1 {
        top: 33px;
    }

    .customized-medical-kits1,
    .dental1 {
        position: absolute;
        top: 66px;
        left: 0;
    }

    .dental1 {
        top: 99px;
    }

    .diagnostics-laboratory1 {
        position: absolute;
        top: 132px;
        left: 0;
    }

    .dialysis1,
    .dme-durable-medical1 {
        position: absolute;
        top: 165px;
        left: 0;
    }

    .dme-durable-medical1 {
        top: 198px;
    }

    .drug-wholesale,
    .emergency,
    .gloves1 {
        position: absolute;
        top: 231px;
        left: 0;
    }

    .emergency,
    .gloves1 {
        top: 264px;
    }

    .gloves1 {
        top: 297px;
    }

    .home-personal1,
    .hospital {
        position: absolute;
        top: 330px;
        left: 0;
    }

    .hospital {
        top: 363px;
    }

    .athletic1,
    .nursing-home1 {
        position: absolute;
        top: 396px;
        left: 0;
    }

    .athletic1 {
        top: 429px;
        left: 1px;
    }

    .cosmetic-surgery2,
    .customized-medical-kits2 {
        position: absolute;
        top: 462px;
        left: 1px;
    }

    .customized-medical-kits2 {
        top: 495px;
    }

    .dental2,
    .diagnostics-laboratory2 {
        position: absolute;
        top: 528px;
        left: 1px;
    }

    .diagnostics-laboratory2 {
        top: 561px;
    }

    .dialysis2,
    .dme-durable-medical2 {
        position: absolute;
        top: 594px;
        left: 1px;
    }

    .dme-durable-medical2 {
        top: 627px;
    }

    .drug-wholesale1,
    .emergency1,
    .gloves2 {
        position: absolute;
        top: 660px;
        left: 1px;
    }

    .emergency1,
    .gloves2 {
        top: 693px;
    }

    .gloves2 {
        top: 726px;
        text-decoration: underline;
        color: var(--color-darkblue);
    }

    .home-personal2,
    .hospital1 {
        position: absolute;
        top: 759px;
        left: 1px;
    }

    .hospital1 {
        top: 792px;
    }

    .athletic-parent,
    .nursing-home2 {
        position: absolute;
        top: 825px;
        left: 1px;
    }

    .athletic-parent {
        top: 18px;
        left: 23px;
        width: 240px;
        height: 846px;
        overflow: hidden;
    }

    .scrolling-list-child,
    .scrolling-list-item {
        position: absolute;
        top: 19px;
        border-radius: var(--br-3xs);
    }

    .scrolling-list-child {
        left: 322px;
        background-color: rgba(217, 217, 217, 0.5);
        width: 20px;
        height: 461px;
    }

    .scrolling-list-item {
        left: 319px;
        background-color: #d9d9d9;
        border: 1px solid var(--color-darkblue);
        box-sizing: border-box;
        width: 26px;
        height: 93px;
    }

    .scrolling-list {
        position: relative;
        border-radius: 0 0 var(--br-3xs) var(--br-3xs);
        background-color: var(--color-white);
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
        width: 383px;
        height: 499px;
        overflow: hidden;
        max-width: 90%;
        max-height: 90%;
        text-align: left;
        font-size: var(--font-size-sm);
        color: var(--color-black);
        font-family: var(--font-poppins);
    }

    .profile1 {
        position: absolute;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        display: inline-block;
    }

    .profile,
    .profile2,
    .profile4 {
        position: absolute;
        top: 46px;
        left: 32px;
        width: 122.46px;
        height: 19.77px;
    }

    .profile2,
    .profile4 {
        top: 146px;
        left: 37px;
    }

    .profile4 {
        top: 96px;
        left: 32px;
        width: 145px;
        height: 20px;
    }

    .profile6 {
        top: 246px;
        width: 122.46px;
        height: 19.77px;
        cursor: pointer;
    }

    .profile10,
    .profile6,
    .profile8 {
        position: absolute;
        left: 37px;
    }

    .profile8 {
        top: 296px;
        width: 122.46px;
        height: 19.77px;
        cursor: pointer;
    }

    .profile10 {
        top: 196px;
        width: 177px;
        height: 20px;
    }

    .profile-drop-down {
        position: relative;
        border-radius: var(--br-3xs);
        background-color: var(--color-white);
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
        width: 240px;
        height: 362px;
        overflow: hidden;
        max-width: 90%;
        max-height: 90%;
        text-align: left;
        font-size: var(--font-size-base);
        color: var(--color-black);
        font-family: var(--font-poppins);
    }
</style>