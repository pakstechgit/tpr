<style>
  html {
    scroll-behavior: smooth;
  }

  a:visited {
    text-decoration: none;
    color: #000;
  }

  .eye {
    top: 332px;
    left: 860px;
    overflow: hidden;
  }

  .eye,
  .search-box,
  .search-lg {
    position: absolute;
    width: 24px;
    height: 24px;
  }

  .a-link {
    color: #000;
    text-decoration: none;
  }

  .search-lg {
    top: 0;
    left: 0;
    overflow: hidden;
  }

  .search-box {
    top: 205px;
    left: 1233px;
  }

  .na-account-header-child {
    /* position: absolute; */
    /* top: 232px;
      left: -10px; */

  }

  .blue-background {
    position: absolute;
    height: 100%;
    top: 0;
    bottom: 0;
    left: 0;
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

  .your-one-stop-shop {
    margin: 0;
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
    position: absolute;
    height: 25%;
    top: 50.63%;
    bottom: 24.38%;
    left: 0;
    width: 100%;
    color: var(--color-white);
  }

  .frame-div,
  .group-inner {
    position: absolute;
    top: 0;
    left: 0;
  }

  .group-inner {
    height: 100%;
    width: 100%;
    right: 0;
    bottom: 0;
    background-color: var(--color-white);
  }

  .frame-div {
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

  .group-child1 {
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
    font-size: var(--font-size-lg);
  }

  .url {
    position: relative;
    width: 0;
    height: 0;
  }

  .search-button-child {
    position: static;
    height: 100%;
    width: 100%;
    top: 100%;
    right: 0;
    bottom: -100%;
    left: 0;
    border-radius: var(--br-8xs);
    background-color: var(--color-white);
  }

  .all,
  .icon1 {
    position: relative;
  }

  .icon1 {
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
    position: relative;
    top: 177px;
    left: 570px;
    width: 812px;
    height: 50px;
    font-size: var(--font-size-base);
  }

  .na-account-header {
    position: relative;
    display: flex;
    top: 0;
    left: 0;
    background-color: var(--color-white);
    box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
    width: 100%;
    height: 320px;
    overflow: hidden;
    font-size: var(--font-size-sm);
  }

  .physician-care-main-child {
    position: absolute;
    height: 25.23%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 74.77%;
    left: 0;
  }

  .physician-care1 {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    font-weight: 500;
    display: inline-block;
  }

  .physician-care-main-inner {
    position: absolute;
    height: 10.01%;
    width: 21.84%;
    top: 10.68%;
    right: 73.57%;
    bottom: 79.31%;
    left: 4.59%;
    font-size: var(--font-size-31xl);
  }

  .rectangle-div,
  .rectangle-icon {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }

  .rectangle-icon {
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
  }

  .rectangle-div {
    background: linear-gradient(205.57deg,
        rgba(255, 255, 255, 0),
        rgba(0, 0, 0, 0.56));
  }

  .rectangle-container {
    width: 32.95%;
    right: 67.05%;
    left: 0;
  }

  .group-child3,
  .group-child5,
  .group-div,
  .rectangle-container {
    position: absolute;
    height: 100%;
    top: 0;
    bottom: 0;
  }

  .group-child3 {
    width: 100%;
    right: 0;
    left: 0;
    background: linear-gradient(211.68deg,
        rgba(255, 255, 255, 0),
        rgba(83, 83, 83, 0.38) 47.47%,
        rgba(23, 23, 23, 0.51) 79.63%,
        rgba(0, 0, 0, 0.56));
  }

  .group-child5,
  .group-div {
    width: 32.95%;
    right: 33.46%;
    left: 33.59%;
  }

  .group-child5 {
    height: 99.53%;
    width: 99.61%;
    top: 0.47%;
    right: 0.39%;
    left: 0;
    background: linear-gradient(230.34deg,
        rgba(255, 255, 255, 0),
        rgba(0, 0, 0, 0.56));
  }

  .rectangle-parent1 {
    position: absolute;
    height: 100%;
    width: 32.95%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 67.05%;
  }

  .sphygmomanometer,
  .stethoscope,
  .thermometers {
    position: absolute;
    height: 8.38%;
    width: 20.15%;
    top: 84.43%;
    left: 2.52%;
    letter-spacing: 0.15em;
    font-weight: 500;
    display: inline-block;
  }

  .stethoscope,
  .thermometers {
    width: 13.97%;
    left: 35.8%;
  }

  .stethoscope {
    width: 11.99%;
    left: 68.95%;
  }

  .group-container {
    position: absolute;
    height: 66.33%;
    width: 90.83%;
    top: 31.97%;
    right: 4.58%;
    bottom: 10.7%;
    left: 4.59%;
    font-size: var(--font-size-5xl);
    color: var(--color-white);
  }

  .shop-alcohol-prep {
    position: absolute;
    top: 32.94%;
    left: 20.27%;
    font-weight: 600;
  }

  .prep-pods,
  .shop-alcohol {
    position: absolute;
    height: 11.35%;
    width: 25.61%;
    top: 10.68%;
    right: 4.64%;
    bottom: 77.97%;
    left: 69.75%;
  }

  .prep-pods {
    height: 9%;
    width: 24.71%;
    top: 14.09%;
    right: 4.59%;
    bottom: 79.39%;
    left: 70.7%;
    border-radius: var(--br-3xs);
    background-color: var(--color-white);
    border: 1.5px solid var(--color-darkgray-200);
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    padding: var(--padding-base) var(--padding-64xl);
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }

  .prep-pods:hover {
    background-color: var(--color-darkblue);
    transition: 600ms ease;
    border: none;
    color: #fff;
  }

  .physician-care-main {
    position: absolute;
    top: 1963px;
    left: 0;
    width: 100%;
    height: 757px;
    background-image: url(<?php echo base_url('assets_system/images/tpr_images/physician-care-main@3x.png'); ?>);

    background-size: cover;
    background-repeat: no-repeat;
    background-position: top;
  }

  .view-all-products {
    position: absolute;
    top: 92.17%;
    left: 43.21%;
    text-decoration: underline;
    font-weight: 500;
    cursor: pointer;
  }

  .chevron-right-icon {
    position: absolute;
    height: 71.43%;
    width: 2.49%;
    top: 14.29%;
    right: 0.5%;
    bottom: 14.29%;
    left: 97.01%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }

  .button-right {
    position: absolute;
    height: 100%;
    width: 3.49%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 96.51%;
    border-radius: var(--br-21xl);
    background-color: var(--color-gray-500);
    box-shadow: 0 0 16px rgba(0, 0, 0, 0.12);
    transform: rotate(-90deg);
  }

  .button-right-child img {}

  .button-left-child {
    position: relative;
    width: 40px;
    height: 40px;
    transform: rotate(-180deg);
  }

  .button-left {
    position: absolute;
    height: 100%;
    width: 3%;
    top: 100%;
    right: 93.03%;
    bottom: -100%;
    left: 3.49%;
    border-radius: var(--br-21xl);
    background-color: var(--color-gray-500);
    box-shadow: 0 0 16px rgba(0, 0, 0, 0.12);
    display: flex;
    flex-direction: row;
    padding: var(--padding-5xs);
    box-sizing: border-box;
    align-items: flex-start;
    justify-content: flex-start;
    transform: rotate(180deg);
    transform-origin: 0 0;
  }

  .left-and-right-button {
    position: absolute;
    height: 14.62%;
    width: 94%;
    top: 0;
    right: 0;
    bottom: 85.38%;
    left: 0;
  }

  .log-indots-child,
  .log-indots-item {
    position: relative;
    border-radius: 50%;
    background-color: var(--color-darkblue);
    width: 15px;
    height: 15px;
  }

  .log-indots-item {
    background-color: var(--color-gray-100);
  }

  .log-indots {
    position: absolute;
    height: 3.92%;
    width: 4.21%;
    top: 80.42%;
    right: 47.89%;
    bottom: 15.67%;
    left: 44.89%;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: flex-start;
    gap: var(--gap-3xs);
  }

  .next-button-in-featured {
    position: absolute;
    top: 1455px;
    left: 89px;
    width: 100%;
    height: 383px;
    text-align: center;
    color: var(--color-gray-400);
  }

  .group-child6,
  .group-child7,
  .group-child8 {
    position: absolute;
    height: 48.21%;
    width: 47.48%;
    top: 0;
    right: 52.52%;
    bottom: 51.79%;
    left: 0;
    border-radius: var(--br-3xs);
    background-color: var(--color-whitesmoke-100);
    border: 3px solid var(--color-whitesmoke-300);
    box-sizing: border-box;
  }

  .group-child7,
  .group-child8 {
    right: 0;
    left: 52.52%;
  }

  .group-child8 {
    top: 51.79%;
    bottom: 0;
  }

  .image-removebg-preview-2-icon {
    position: absolute;
    height: 23.8%;
    width: 46.62%;
    top: 0.31%;
    right: 52.95%;
    bottom: 75.89%;
    left: 0.43%;
    border-radius: var(--br-7xs) var(--br-6xs) 0 0;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
  }

  .save-on-little,
  .save-on-little1,
  .save-on-little2 {
    position: absolute;
    height: 3.58%;
    width: 33.72%;
    top: 26.86%;
    left: 6.62%;
    font-weight: 600;
    display: inline-block;
  }

  .save-on-little1,
  .save-on-little2 {
    left: 59.14%;
  }

  .save-on-little2 {
    top: 78.65%;
  }

  .spend-100-and-container,
  .spend-100-and-container1,
  .spend-100-and-container2 {
    position: absolute;
    height: 6.74%;
    width: 47.48%;
    top: 31.36%;
    left: 0;
    font-size: var(--font-size-sm);
    line-height: 157.02%;
    color: var(--color-black);
    display: inline-block;
  }

  .spend-100-and-container1,
  .spend-100-and-container2 {
    left: 52.52%;
  }

  .spend-100-and-container2 {
    top: 83.15%;
  }

  .group-child9 {
    position: absolute;
    height: 48.21%;
    width: 47.48%;
    top: 51.79%;
    right: 52.52%;
    bottom: 0;
    left: 0;
    border-radius: var(--br-3xs);
    background-color: var(--color-whitesmoke-100);
    border: 3px solid var(--color-whitesmoke-300);
    box-sizing: border-box;
  }

  .save-on-little3 {
    position: absolute;
    height: 3.58%;
    width: 33.72%;
    top: 78.65%;
    left: 6.62%;
    font-weight: 600;
    display: inline-block;
  }

  .spend-100-and-container3 {
    position: absolute;
    height: 6.74%;
    width: 47.48%;
    top: 83.15%;
    left: 0;
    font-size: var(--font-size-sm);
    line-height: 157.02%;
    color: var(--color-black);
    display: inline-block;
  }

  .removebg-preview-1-icon,
  .removebg-preview-2-icon,
  .removebg-preview-2-icon1 {
    position: absolute;
    height: 23.8%;
    width: 46.62%;
    top: 52.09%;
    right: 52.95%;
    bottom: 24.11%;
    left: 0.43%;
    border-radius: var(--br-6xs);
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
  }

  .removebg-preview-1-icon,
  .removebg-preview-2-icon1 {
    top: 51.79%;
    right: 0.29%;
    bottom: 24.41%;
    left: 53.09%;
    border-radius: var(--br-5xs);
  }

  .removebg-preview-2-icon1 {
    top: 0.31%;
    right: 0.43%;
    bottom: 75.89%;
    left: 52.95%;
    border-radius: var(--br-6xs);
  }

  .rectangle-parent2 {
    position: absolute;
    height: 100%;
    width: 52.61%;
    top: 0;
    right: 0.01%;
    bottom: 0;
    left: 47.38%;
    text-align: center;
    font-size: var(--font-size-4xl);
    color: var(--color-gray-400);
  }

  .gauzes-sponges {
    position: relative;
    font-weight: 600;
  }

  .neque-porro-quisquam {
    position: relative;
    font-size: var(--font-size-3xl);
    line-height: 210%;
    font-weight: 500;
    color: rgba(30, 30, 30, 0.69);
    text-align: center;
    display: inline-block;
    width: 493.22px;
  }

  .gauzes-sponges-parent,
  .shop {
    display: flex;
    align-items: center;
  }

  .shop {
    border-radius: var(--br-3xs);
    background-color: var(--color-darkblue);
    border: 1.5px solid var(--color-darkblue);
    box-sizing: border-box;
    height: 60px;
    flex-direction: row;
    padding: var(--padding-base) 84px;
    justify-content: center;
    font-size: var(--font-size-xl);
    color: var(--color-white);
    cursor: pointer;
  }

  .shop:hover {
    border: 2px solid var(--color-darkblue);
    background-color: var(--color-white);
    color: var(--color-black);
    transition: 600ms ease;
  }

  .gauzes-sponges-parent {
    position: absolute;
    height: 46.68%;
    width: 37.42%;
    top: 26.66%;
    right: 62.59%;
    bottom: 26.66%;
    left: -0.01%;
    flex-direction: column;
    justify-content: flex-start;
    gap: 46px;
    font-size: var(--font-size-31xl);
    color: var(--color-gray-400);
  }

  .shop-now {
    position: relative;
    font-weight: 500;
  }

  .shop-now-ja,
  .shop-now-ja1,
  .shop-now-ja2,
  .shop-now-ja3 {
    position: absolute;
    height: 5.08%;
    width: 13.72%;
    top: 40.22%;
    right: 33.21%;
    bottom: 54.7%;
    left: 53.07%;
    border-radius: var(--br-sm);
    background-color: var(--color-white);
    border: 1.5px solid var(--color-darkgray-200);
    box-sizing: border-box;
    display: flex;
    flex-direction: row;
    /* padding: var(--padding-base) var(--padding-64xl); */
    align-items: center;
    justify-content: center;
    cursor: pointer;
  }

  .shop-now-ja1,
  .shop-now-ja2,
  .shop-now-ja3 {
    top: 92%;
    bottom: 2.93%;
  }

  .shop-now-ja2,
  .shop-now-ja3 {
    top: 92.6%;
    right: 5.53%;
    bottom: 2.32%;
    left: 80.74%;
  }

  .shop-now-ja3 {
    top: 40.22%;
    right: 5.61%;
    bottom: 54.7%;
    left: 80.67%;
  }

  .shop-now-ja:hover,
  .shop-now-ja1:hover,
  .shop-now-ja2:hover,
  .shop-now-ja3:hover {
    background-color: var(--color-darkblue);
    transition: 600ms ease;
    border: none;
    color: #fff;
  }

  .gauzes-sponges-main {
    position: absolute;
    top: 4545px;
    left: 213px;
    width: 1318px;
    height: 979px;
    font-size: var(--font-size-base);
  }

  .new-products1 {
    position: absolute;
    top: 26.67%;
    left: 0;
    font-weight: 600;
  }

  .new-products,
  .shop-products {
    position: absolute;
    top: 2825px;
    left: 42%;
    width: 348px;
    height: 75px;
    font-size: var(--font-size-31xl);
    color: var(--color-gray-300);
  }

  .shop-products {
    top: 3675px;
    left: 42%;
    width: 368px;
    text-align: center;
  }

  .next-button-in-featured1,
  .next-button-in-featured2 {
    position: absolute;
    top: 3187px;
    left: 89px;
    width: 100%;
    height: 383px;
    text-align: center;
    color: var(--color-gray-400);
  }

  .next-button-in-featured2 {
    top: 4037px;
  }

  .featured-products {
    position: absolute;
    top: 0;
    left: 35.22%;
    font-size: var(--font-size-31xl);
    font-weight: 600;
    color: var(--color-gray-300);
  }

  .gloves1,
  .sponges {
    font-weight: 500;
    cursor: pointer;
  }

  .gloves1 {
    position: absolute;
    top: 92px;
    left: 289px;
    display: inline-block;
    width: 201px;
  }

  .sponges {
    left: 847px;
    width: 197px;
  }

  .sharps-container2,
  .sponges,
  .syringes {
    position: absolute;
    top: 92px;
    display: inline-block;
  }

  .sharps-container2 {
    left: 570px;
    color: var(--color-black);
    width: 197px;
  }

  .syringes {
    left: 1124px;
    font-weight: 500;
    width: 168px;
    cursor: pointer;
  }

  .sharps-child,
  .sharps-item {
    position: absolute;
    height: 1.47%;
    top: 99.26%;
    bottom: -0.74%;
    box-sizing: border-box;
  }

  .sharps-child {
    width: 100.13%;
    right: -0.06%;
    left: -0.06%;
    border-top: 2px solid #c8c8c8;
  }

  .sharps-item {
    width: 12.59%;
    right: 51.39%;
    left: 28.3%;
    border-top: 2px solid var(--color-black);
  }

  .sharps {
    position: absolute;
    top: 1004px;
    left: 82px;
    width: 100%;
    height: 136px;
    text-align: center;
    font-size: var(--font-size-lg);
    color: var(--color-darkgray-300);
    display: flex;
    justify-content: center;
  }

  .hero-section-main-item {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: -88px;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }

  .h1 {
    position: relative;
    letter-spacing: 1px;
    line-height: 65px;
    text-transform: uppercase;
    display: inline-block;
    width: 1073px;
    z-index: 0;
  }

  .frame-item {
    z-index: 1;
  }

  .shop-lab-supplies1 {
    position: relative;
    letter-spacing: 0.5px;
    text-transform: capitalize;
    cursor: pointer;
  }

  .shop-lab-supplies {
    margin: 0 !important;
    position: absolute;
    top: 301px;
    left: 0;
    border-radius: 12px;
    background-color: var(--color-white);
    border: 1.5px solid var(--color-darkgray-200);
    box-sizing: border-box;
    width: 239px;
    height: 60px;
    display: flex;
    flex-direction: row;
    /* padding: var(--padding-base) var(--padding-64xl); */
    align-items: center;
    justify-content: center;
    z-index: 2;
    font-size: var(--font-size-xl);
    color: var(--color-black);
  }

  .shop-lab-supplies:hover {
    background-color: var(--color-darkblue);
    transition: 600ms ease;
    border: none;
    color: #fff;
  }

  .h1-parent {
    position: absolute;
    top: 113px;
    left: 80px;
    height: 124px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: var(--gap-3xs);
    margin-left: 30px;
  }

  .hero-section-main-child1,
  .hero-section-main-child2,
  .hero-section-main-inner {
    position: absolute;
    top: 548px;
    left: 80px;
    border-radius: 50%;
    background-color: var(--color-white);
    width: 15px;
    height: 15px;
    margin-left: 35px;
  }

  .hero-section-main-child1,
  .hero-section-main-child2 {
    left: 105px;
    background-color: var(--color-gainsboro-100);
  }

  .hero-section-main-child2 {
    left: 130px;
  }

  .hero-section-main {
    position: absolute;
    top: 320px;
    left: 0;
    width: 100%;
    height: 609px;
    font-size: var(--font-size-31xl);
    color: var(--color-white);
  }

  .child {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: var(--br-3xs);
    background-color: var(--color-white);
    border: 2px solid var(--color-whitesmoke-300);
    box-sizing: border-box;
  }

  .powder-free-nitrile-exam {
    position: relative;
    font-size: var(--font-size-base);
    font-weight: 600;
    color: var(--color-gray-400);
    display: inline-block;
    width: 284px;
    height: 51px;
    flex-shrink: 0;
  }

  .emerald1 {
    position: relative;
    color: var(--color-gray-200);
  }

  .div1 {
    position: absolute;
    top: 0;
    left: 12px;
    font-weight: 600;
  }

  .currencyphilippine-peso-php,
  .peso-icon {
    position: absolute;
    top: 2px;
    left: 0;
    width: 15px;
    height: 15px;
    overflow: hidden;
  }

  .peso-icon {
    height: 48.21%;
    width: 15.37%;
    top: 20.83%;
    right: 82.99%;
    bottom: 30.95%;
    left: 1.64%;
    max-width: 100%;
    max-height: 100%;
  }

  .price {
    position: relative;
    width: 61px;
    height: 21px;
  }

  .only-extra-large {
    position: relative;
    font-size: var(--font-size-2xs);
  }

  .powder-free-nitrile-exam-glove-parent {
    position: absolute;
    height: 27.4%;
    width: 86.59%;
    top: 68.3%;
    right: 6.71%;
    bottom: 4.31%;
    left: 6.71%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    gap: var(--gap-3xs);
  }

  .image,
  .image-child {
    position: absolute;
    width: 100%;
    top: 0;
    right: 0;
    left: 0;
  }

  .image-child {
    height: 100%;
    bottom: 0;
    border-radius: var(--br-3xs) var(--br-3xs) 0 0;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
  }



  .image {
    height: 64.19%;
    bottom: 35.81%;
  }

  .div,
  .div2,
  .div4,
  .peso-icon3 {
    position: absolute;
    height: 100%;
    width: 23.6%;
    top: 0;
    bottom: 0;
  }

  .div {
    right: 76.4%;
    left: 0;
    cursor: pointer;
  }

  .div2,
  .div4,
  .peso-icon3 {
    right: 50.94%;
    left: 25.47%;
  }

  .div4,
  .peso-icon3 {
    right: 25.47%;
    left: 50.94%;
  }

  .peso-icon3 {
    height: 48.21%;
    width: 7.05%;
    top: 20.83%;
    right: 92.2%;
    bottom: 30.95%;
    left: 0.75%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }

  .div8 {
    position: absolute;
    top: 0;
    left: 87px;
    font-weight: 600;
  }

  .peso-icon4 {
    position: absolute;
    height: 48.21%;
    width: 7.05%;
    top: 20.83%;
    right: 35.81%;
    bottom: 30.95%;
    left: 57.14%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }

  .price3 {
    position: relative;
    width: 133px;
    height: 21px;
  }

  .div6 {
    position: absolute;
    height: 100%;
    width: 23.6%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 76.4%;
  }

  .new-products2 {
    top: 2947px;
    left: calc(50% - 695px);
    width: 76%;
  }

  .home-product-list,
  .new-products2,
  .shop-products2 {
    position: absolute;
    width: 1390px;
    height: 511px;
    font-size: var(--font-size-sm);
  }

  .shop-products2 {
    top: 3797px;
    left: calc(50% - 695px);
  }

  .home-product-list {
    top: 1215px;
    left: 177px;
    width: 85%;
  }

  .deals-promos {
    position: absolute;
    width: 100%;
    top: 26.67%;
    left: 0;
    font-weight: 600;
    display: inline-block;
  }

  .sales-updates {
    position: absolute;
    top: 5629px;
    left: calc(50% - 200px);
    width: 400px;
    height: 75px;
    text-align: center;
    font-size: var(--font-size-31xl);
    color: var(--color-gray-400);
  }

  .view-all-products4 {
    position: absolute;
    top: 26.67%;
    left: 1.56%;
    text-decoration: underline;
    font-weight: 500;
  }

  .view-all-products3 {
    position: absolute;
    top: 6364px;
    left: calc(50% - 96px);
    width: 192px;
    height: 30px;
    text-align: center;
    color: var(--color-gray-400);
  }

  .span1 {
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

  .get-started {
    position: absolute;
    top: 294px;
    left: 0;
    border-radius: var(--br-3xs);
    background-color: var(--color-white);
    border: 1.5px solid var(--color-darkgray-200);
    box-sizing: border-box;
    width: 140px;
    display: flex;
    flex-direction: row;
    padding: var(--padding-base);
    align-items: center;
    justify-content: center;
    font-size: var(--font-size-xs);
    cursor: pointer;
  }

  .frame-group {
    position: relative;
    width: 656px;
    height: 344px;
  }

  .get-started:hover {
    background-color: var(--color-darkblue);
    border: none;
    color: #fff;
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
    border: 1.5px solid var(--color-gainsboro-100);
    box-sizing: border-box;
    width: 572px;
    display: flex;
    flex-direction: row;
    padding: var(--padding-3xs) 35px var(--padding-3xs) var(--padding-5xl);
    align-items: center;
    justify-content: flex-start;
  }

  .frame-wrapper1 {
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

  .frame-wrapper2 {
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
    border: 1.5px solid var(--color-darkgray-200);
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
    cursor: pointer;
  }

  .subscribe:hover {
    background-color: var(--color-darkblue);
    border: none;
    color: #fff;
  }

  .frame-wrapper4 {
    position: relative;
    width: 135.69px;
    height: 54px;
    color: var(--color-black);
  }

  .enter-your-email-address-parent,
  .frame-wrapper3 {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
  }

  .enter-your-email-address-parent {
    gap: 250px;
  }

  .frame-wrapper3 {
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

  .frame-parent1 {
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
    top: 6654px;
    left: calc(50% - 681px);
    width: 1362px;
    height: 344px;
    font-size: var(--font-size-5xl);
  }

  .group-child10 {
    height: 100%;
    width: 100%;
    right: 0;
    bottom: 0;
    background-color: var(--color-darkblue);
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.04);
  }

  .group-child10,
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

  .group-child11 {
    position: absolute;
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
    position: absolute;
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
  .div27 {
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

  .group-child12 {
    position: absolute;
    top: 0;
    left: 0;
    border-radius: var(--br-5xs);
    background-color: var(--color-white);
    width: 583px;
    height: 56px;
  }

  .enter-your-email1 {
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
    padding: var(--padding-5xs);
    align-items: flex-start;
    justify-content: flex-start;
  }

  .rectangle-parent3,
  .vector-icon1 {
    position: relative;
    width: 583px;
    height: 56px;
  }

  .vector-icon1 {
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

  .div28 {
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

  .div29 {
    position: relative;
    display: flex;
    align-items: center;
    width: 114px;
    height: 31px;
    flex-shrink: 0;
  }

  .united-states-4-parent {
    width: 150px;
    height: 12px;
    display: flex;
    flex-direction: row;
    align-items: center;
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
    gap: var(--gap-3xs);
    text-align: left;
    font-size: var(--font-size-xs);
  }

  .frame-parent4 {
    gap: 23px;
    text-align: center;
  }

  .vector-icon2 {
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

  .frame-parent6,
  .frame-parent7 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
  }

  .frame-parent7 {
    gap: 12px;
    font-size: var(--font-size-xs);
  }

  .frame-parent6 {
    width: 244px;
    gap: var(--gap-5xl);
  }

  .vector-icon3 {
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

  .frame-wrapper5 {
    flex-direction: column;
    text-align: right;
    font-size: var(--font-size-xs);
  }

  .frame-parent3,
  .frame-parent8,
  .frame-wrapper5,
  .group-parent1 {
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
  }

  .frame-parent8 {
    width: 135px;
    flex-direction: column;
    gap: var(--gap-5xl);
  }

  .frame-parent3,
  .group-parent1 {
    flex-direction: row;
    gap: 22px;
    color: var(--color-white);
  }

  .group-parent1 {
    position: absolute;
    top: 0;
    left: 1022px;
    flex-direction: column;
    gap: 42px;
    font-size: var(--font-size-base);
    color: var(--color-black);
  }

  .frame-parent2 {
    position: absolute;
    height: 35.04%;
    width: 100%;
    top: 43.26%;
    right: 3.33%;
    bottom: 21.7%;
    left: 6.38%;
    margin-left: 30px;
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
    top: 7128px;
    left: 0;
    width: 100%;
    height: 682px;
    font-size: 14.62px;
    color: var(--color-white);
  }

  .sharps-container-child {
    position: absolute;
    top: 6523.75px;
    left: calc(50% - 792px);
    width: 1585px;
    height: 0.5px;
  }

  .child10,
  .child11 {
    position: absolute;
    width: 99.99%;
  }

  .child10 {
    height: 99.78%;
    top: 0.22%;
    right: 0;
    bottom: 0;
    left: 0.01%;
    border-radius: 12.98px;
    background-color: var(--color-white);
    border: 2.6px solid var(--color-whitesmoke-300);
    box-sizing: border-box;
  }

  .child11 {
    height: 56.29%;
    top: 0;
    right: 0.01%;
    bottom: 43.71%;
    left: 0;
    border-radius: var(--br-3xs) var(--br-3xs) 0 0;
    background-color: var(--color-whitesmoke-300);
  }

  .limited-time-offer {
    position: absolute;
    top: 61.55%;
    left: 9.1%;
    font-size: 33.75px;
    font-weight: 600;
    display: none;
  }

  .child12,
  .child13 {
    position: absolute;
    height: 0.24%;
    width: 82.12%;
    top: 71.78%;
    right: 8.94%;
    bottom: 27.98%;
    left: 8.95%;
    border-top: 1.3px solid var(--color-gainsboro-200);
    box-sizing: border-box;
    display: none;
  }

  .child13 {
    top: 81.78%;
    bottom: 17.98%;
  }

  .remaining-022934 {
    height: 4.08%;
    width: 43.65%;
    top: 74.86%;
    left: 9.1%;
  }

  .div32,
  .remaining-022934,
  .toilet-safety-rails {
    position: absolute;
    display: none;
  }

  .div32 {
    height: 4.19%;
    width: 14.53%;
    top: 74.78%;
    left: 76.67%;
    text-align: right;
  }

  .toilet-safety-rails {
    top: 85.61%;
    left: 9.1%;
    font-size: var(--font-size-3xl);
    font-weight: 500;
  }

  .image-removebg-preview-7-1 {
    position: absolute;
    height: 48.55%;
    width: 56.49%;
    top: 3.89%;
    right: 21.8%;
    bottom: 47.56%;
    left: 21.71%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
  }

  .div31 {
    position: absolute;
    height: 107.94%;
    width: 133.5%;
    top: 1.6%;
    right: -182.47%;
    bottom: -9.54%;
    left: 148.98%;
    display: none;
  }

  .child14,
  .child15 {
    position: absolute;
    width: 99.91%;
  }

  .child14 {
    height: 99.97%;
    top: 0.03%;
    right: 0.09%;
    bottom: 0;
    left: 0;
    border-radius: 12.98px;
    background-color: var(--color-white);
    border: 2.6px solid var(--color-whitesmoke-300);
    box-sizing: border-box;
  }

  .child15 {
    height: 56.39%;
    top: 0;
    right: 0;
    bottom: 43.61%;
    left: 0.09%;
    border-radius: var(--br-3xs) var(--br-3xs) 0 0;
    background-color: var(--color-whitesmoke-300);
  }

  .best-sellers {
    position: absolute;
    top: 61.48%;
    left: 9.08%;
    font-size: 33.75px;
    font-weight: 600;
    display: none;
  }

  .child16,
  .child17 {
    position: absolute;
    height: 0.24%;
    width: 82.05%;
    top: 71.72%;
    right: 9.02%;
    bottom: 28.03%;
    left: 8.93%;
    border-top: 1.3px solid var(--color-gainsboro-200);
    box-sizing: border-box;
    display: none;
  }

  .child17 {
    top: 81.75%;
    bottom: 18.01%;
  }

  .remaining-0229341 {
    height: 4.08%;
    width: 44.08%;
    top: 74.81%;
    left: 9.18%;
  }

  .div34,
  .dynaride-convertible,
  .remaining-0229341 {
    position: absolute;
    display: none;
  }

  .div34 {
    height: 4.2%;
    width: 14.52%;
    top: 74.74%;
    left: 76.6%;
    text-align: right;
  }

  .dynaride-convertible {
    top: 85.58%;
    left: 9.18%;
    font-size: var(--font-size-3xl);
    font-weight: 500;
  }

  .image-removebg-preview-8-1 {
    position: absolute;
    height: 53.46%;
    width: 66.94%;
    top: 1.49%;
    right: 16.65%;
    bottom: 45.05%;
    left: 16.42%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
  }

  .div33 {
    position: absolute;
    height: 107.74%;
    width: 133.6%;
    top: 1.8%;
    right: -332.32%;
    bottom: -9.54%;
    left: 298.72%;
    display: none;
  }

  .child18,
  .image-removebg-preview-6-2 {
    position: absolute;
    width: 100%;
    top: 0;
    right: 0;
    left: 0;
  }

  .child18 {
    height: 100%;
    bottom: 0;
    border-radius: 12.98px;
    background-color: var(--color-white);
    border: 2.6px solid var(--color-whitesmoke-300);
    box-sizing: border-box;
  }

  .image-removebg-preview-6-2 {
    height: 64%;
    bottom: 36%;
    border-radius: var(--br-3xs) var(--br-3xs) 0 0;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
  }

  .sharps-containers- {
    position: absolute;
    width: 88.44%;
    top: 68%;
    left: 6.25%;
    font-weight: 600;
    display: inline-block;
  }

  .dynarex7 {
    position: absolute;
    top: 75.4%;
    left: 6.25%;
    color: var(--color-gray-200);
  }

  .div36 {
    position: absolute;
    width: 87.39%;
    top: 0;
    left: 12.61%;
    font-weight: 500;
    display: inline-block;
  }

  .currencyphilippine-peso-php12 {
    position: absolute;
    height: 71.43%;
    width: 12.6%;
    top: 14.29%;
    right: 87.4%;
    bottom: 14.29%;
    left: 0;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }

  .div37,
  .group-frame {
    position: absolute;
    top: 0;
  }

  .group-frame {
    height: 55.26%;
    width: 48.57%;
    right: 51.43%;
    bottom: 44.74%;
    left: 0;
    color: var(--color-darkgray-100);
  }

  .div37 {
    width: 87.7%;
    left: 12.3%;
    font-weight: 600;
    display: inline-block;
  }

  .currencyphilippine-peso-php13 {
    position: absolute;
    height: 71.43%;
    width: 12.29%;
    top: 9.52%;
    right: 87.71%;
    bottom: 19.05%;
    left: 0;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }

  .group-wrapper1 {
    position: absolute;
    height: 55.26%;
    width: 49.8%;
    top: 0;
    right: 0;
    bottom: 44.74%;
    left: 50.2%;
  }

  .sizes-available3 {
    position: absolute;
    width: 36.73%;
    top: 55.26%;
    left: 1.22%;
    font-size: var(--font-size-2xs);
    display: inline-block;
  }

  .group-parent2,
  .off-wrapper {
    position: absolute;
    height: 7.6%;
    width: 80.63%;
    top: 80.8%;
    right: 13.12%;
    bottom: 11.6%;
    left: 6.25%;
  }

  .off-wrapper {
    height: 4.8%;
    width: 16.56%;
    top: 4%;
    right: 77.19%;
    bottom: 91.2%;
    background-color: var(--color-white);
    display: flex;
    flex-direction: row;
    padding: var(--padding-3xs);
    box-sizing: border-box;
    align-items: center;
    justify-content: center;
    font-size: var(--font-size-3xs);
    color: var(--color-firebrick);
  }

  .div35 {
    position: absolute;
    height: 100%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    font-size: var(--font-size-sm);
    color: var(--color-black);
  }

  .group-child13 {
    position: absolute;
    top: 414.7px;
    left: 35.7px;
    border-top: 0.6px solid var(--color-red);
    box-sizing: border-box;
    width: 104.6px;
    height: 0.6px;
  }

  .parent {
    position: absolute;
    height: 100%;
    width: 23.15%;
    top: 0;
    right: 76.85%;
    bottom: 0;
    left: 0;
  }

  .dynarex8,
  .group-parent3 {
    position: absolute;
    left: 6.25%;
  }

  .dynarex8 {
    top: 76.4%;
    color: var(--color-gray-200);
  }

  .group-parent3 {
    height: 7.6%;
    width: 80.63%;
    top: 82.6%;
    right: 13.12%;
    bottom: 9.8%;
  }

  .group-child14 {
    position: absolute;
    top: 423.7px;
    left: 35.7px;
    border-top: 0.6px solid var(--color-red);
    box-sizing: border-box;
    width: 104.6px;
    height: 0.6px;
  }

  .parent1,
  .parent4,
  .parent7 {
    position: absolute;
    height: 100%;
    width: 23.15%;
    top: 0;
    right: 51.23%;
    bottom: 0;
    left: 25.62%;
  }

  .parent4,
  .parent7 {
    right: 25.62%;
    left: 51.23%;
  }

  .parent7 {
    right: 0;
    left: 76.85%;
  }

  .deals-promos1 {
    position: absolute;
    top: 5834px;
    left: calc(50% - 691px);
    width: 1382px;
    height: 500px;
    font-size: 18.17px;
    color: var(--color-gray-400);
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
    left: 292px;
    width: 1160px;
    height: 24px;
    cursor: pointer;
  }

  .nav-menu-signed-out {
    position: absolute;
    top: 240px;
    left: 0;
    width: 100%;
    height: 80px;
    font-size: var(--font-size-base);
  }

  .screenshot-2023-05-10-at-617 {
    position: absolute;
    height: 1.1%;
    width: 100%;
    top: 0;
    right: 0;
    bottom: 98.9%;
    left: 0;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
    object-fit: cover;
  }

  .group-child17 {
    position: absolute;
    top: 0;
    left: 0;
    border-radius: var(--br-3xs);
    width: 114px;
    height: 42px;
  }

  .icon2 {
    position: absolute;
    height: 52.38%;
    width: 19.3%;
    top: 23.81%;
    right: 67.54%;
    bottom: 23.81%;
    left: 13.16%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }

  .chat,
  .vector-parent1 {
    position: absolute;
    top: 9px;
    left: 56px;
  }

  .vector-parent1 {
    position: fixed;
    top: 755px;
    left: 1712px;
    width: 114px;
    height: 42px;
    font-size: var(--font-size-base);
    color: var(--color-white);
  }

  .arrow-narrow-up-wrapper {
    position: fixed;
    top: 650px;
    left: 1726px;
    border-radius: 50px;
    background-color: var(--color-darkblue);
    box-shadow: 0 10px 50px rgba(0, 0, 0, 0.32);
    border: 1px solid var(--color-white);
    box-sizing: border-box;
    width: 80px;
    display: flex;
    flex-direction: row;
    padding: var(--padding-5xl);
    align-items: flex-start;
    justify-content: flex-start;
  }

  .sharps-container1 {
    position: relative;
    background-color: var(--color-white);
    margin-top: -75px;
    height: 7700px;
    width: 1920px;
    overflow: hidden;
    text-align: left;
    font-size: var(--font-size-xl);
    color: var(--color-black);
    font-family: var(--font-poppins);
  }

  .chatbox-child {
    position: absolute;
    top: 0;
    left: 0;
    border-radius: var(--br-7xs);
    width: 475px;
    height: 762px;
  }

  .ask-our-in-store {
    position: absolute;
    top: 27px;
    left: 37px;
  }

  .icon {
    position: relative;
    width: 10px;
    height: 10px;
  }

  .icon-wrapper {
    position: absolute;
    top: 27px;
    left: 343px;
    width: 100px;
    height: 100px;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    justify-content: flex-start;
  }

  .span,
  .virtual-shopping-by {
    font-weight: 300;
  }

  .span {
    font-family: var(--font-poppins);
  }

  .tpr {
    color: var(--color-black);
  }

  .virtual-shopping-by-container {
    position: absolute;
    top: 64px;
    left: 37px;
    font-size: var(--font-size-2xs);
    color: var(--color-dimgray);
  }

  .tpr-philippines-privacy,
  .tpr-philippines-terms {
    position: absolute;
    top: 0;
    left: 0;
    font-weight: 300;
  }

  .tpr-philippines-terms {
    left: 96px;
  }

  .group-child {
    position: absolute;
    top: 5px;
    left: 90px;
    border-radius: 50%;
    background-color: var(--color-dimgray);
    width: 1px;
    height: 1px;
  }

  .tpr-philippines-privacy-policy-parent {
    position: absolute;
    top: 88px;
    left: 37px;
    width: 179px;
    height: 9px;
    font-size: var(--font-size-7xs);
    color: var(--color-dimgray);
  }

  .chatbox-item {
    position: absolute;
    top: 126.5px;
    left: calc(50% - 237.5px);
    width: 475px;
    height: 1px;
  }

  .how-can-we {
    position: relative;
  }

  .how-can-we-help-you-wrapper {
    position: absolute;
    top: 150px;
    left: 85px;
    border-radius: 0 var(--br-xl) var(--br-xl) 0;
    background-color: var(--color-whitesmoke-200);
    display: flex;
    flex-direction: row;
    padding: var(--padding-3xs) 23px var(--padding-3xs) var(--padding-mini);
    align-items: flex-start;
    justify-content: flex-start;
    color: var(--color-darkblue);
  }

  .looking-for-customer {
    position: absolute;
    top: 639px;
    left: calc(50% + 9.5px);
    font-size: var(--font-size-xs);
    text-decoration: underline;
    color: #484848;
  }

  .camera-01-icon {
    position: absolute;
    top: 9px;
    left: 0;
    width: 24px;
    height: 24px;
    overflow: hidden;
  }

  .arrow-circle-up-icon {
    position: relative;
    width: 24px;
    height: 24px;
    overflow: hidden;
    flex-shrink: 0;
  }

  .type-a-message-parent {
    position: absolute;
    top: 0;
    left: 38px;
    border-radius: 30px;
    background-color: var(--color-whitesmoke-200);
    width: 362px;
    height: 41px;
    display: flex;
    flex-direction: row;
    padding: var(--padding-3xs) var(--padding-3xs) var(--padding-3xs) var(--padding-mini);
    box-sizing: border-box;
    align-items: center;
    justify-content: flex-start;
    gap: 177px;
  }

  .vector-icon {
    position: absolute;
    height: 51.22%;
    width: 5.25%;
    top: 24.39%;
    right: 13.5%;
    bottom: 24.39%;
    left: 81.25%;
    max-width: 100%;
    overflow: hidden;
    max-height: 100%;
  }

  .camera-01-parent {
    position: absolute;
    top: 694px;
    left: 37px;
    width: 400px;
    height: 41px;
    font-size: var(--font-size-base);
  }

  .chatbox-inner {
    position: absolute;
    top: 148px;
    left: 36px;
    width: 46px;
    height: 46px;
  }

  .chatbox {
    position: absolute;
    left: 53%;
    top: 14%;
    border-radius: var(--br-8xs);
    background-color: var(--color-white);
    width: 475px;
    height: 762px;
    overflow: hidden;
    max-width: 90%;
    max-height: 90%;
    text-align: left;
    font-size: var(--font-size-xl);
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
    color: var(--color-silver-100);
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
    color: var(--color-silver-100);
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
    color: var(--color-silver-100);
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

  .group-item {
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

  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

  /* Box sizing rules */
  *,
  *::before,
  *::after {
    box-sizing: border-box;
  }

  /* Remove default margin */
  body,
  h1,
  h2,
  h3,
  h4,
  p,
  figure,
  blockquote,
  dl,
  dd {
    margin: 0;
  }

  /* Remove list styles on ul, ol elements with a list role, which suggests default styling will be removed */
  ul[role='list'],
  ol[role='list'] {
    list-style: none;
  }

  /* Set core root defaults */
  html:focus-within {
    scroll-behavior: smooth;
  }

  /* Set core body defaults */
  body {
    min-height: 100vh;
    text-rendering: optimizeSpeed;
    line-height: 1.5;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(90deg, var(--grey) 31px, transparent 1px) 50%, linear-gradient(180deg, var(--grey) 31px, var(--blue) 1px) 50%;
    background-size: 32px 32px;
    color: var(--dark);
  }

  /* A elements that don't have a class get default styles */
  a:not([class]) {
    text-decoration-skip-ink: auto;
  }

  /* Make images easier to work with */
  img,
  picture {
    max-width: 100%;
    display: block;
  }

  /* Inherit fonts for inputs and buttons */
  input,
  button,
  textarea,
  select {
    font: inherit;
  }

  /* Remove all animations, transitions and smooth scroll for people that prefer not to see them */
  @media (prefers-reduced-motion: reduce) {
    html:focus-within {
      scroll-behavior: auto;
    }

    *,
    *::before,
    *::after {
      animation-duration: 0.01ms !important;
      animation-iteration-count: 1 !important;
      transition-duration: 0.01ms !important;
      scroll-behavior: auto !important;
    }
  }

  /* GLOBAL STYLES */
  :root {
    --blue: #335DFF;
    --grey: #F5F5F5;
    --grey-d-1: #EEE;
    --grey-d-2: #DDD;
    --grey-d-3: #888;
    --white: #FFF;
    --dark: #222;
  }

  /* GLOBAL STYLES */




  .chat {
    font-size: 1.1rem;
    margin-left: 10px;
  }



  /* CHATBOX */
  .chatbox-wrapper {
    position: fixed;
    bottom: 2rem;
    right: 2rem;
    width: 7rem;
    height: 2.75rem;
  }

  .chatbox-toggle {
    width: 100%;
    height: 100%;
    background: var(--blue);
    color: var(--white);
    font-size: 2rem;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    cursor: pointer;
    transition: .2s;
  }

  .chatbox-toggle:active {
    transform: scale(.9);
  }

  .chatbox-message-wrapper {
    position: absolute;
    bottom: calc(100% + 1rem);
    right: 0;
    width: 375px;
    border-radius: .5rem;
    overflow: hidden;
    box-shadow: .5rem .5rem 2rem rgba(0, 0, 0, .1);
    transform: scale(0);
    transform-origin: bottom right;
    transition: .2s;
  }

  .chatbox-message-wrapper.show {
    transform: scale(1);
  }

  .chatbox-message-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: var(--white);
    padding: .75rem 1.5rem;
  }

  .chatbox-message-profile {
    display: flex;
    align-items: center;
    grid-gap: .5rem;
  }

  .chatbox-message-name {
    font-size: 1.125rem;
    font-weight: 600;
    margin: 0;
  }

  .chatbox-message-status {
    font-size: .875rem;
    color: var(--grey-d-3);
  }

  .chatbox-message-dropdown {
    position: relative;
  }

  .chatbox-message-dropdown-toggle {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 2.5rem;
    height: 2.5rem;
    font-size: 1.25rem;
    cursor: pointer;
    border-radius: 50%;
  }

  .chatbox-message-dropdown-toggle:hover {
    background: var(--grey);
  }

  .chatbox-message-dropdown-menu {
    list-style: none;
    margin: 0;
    position: absolute;
    top: 100%;
    right: 0;
    background: var(--white);
    padding: .5rem 0;
    width: 120px;
    box-shadow: .25rem .25rem 1.5rem rgba(0, 0, 0, .1);
    transform: scale(0);
    transform-origin: top right;
    transition: .2s;
    border-radius: .5rem;
  }

  .chatbox-message-dropdown-menu.show {
    transform: scale(1);
  }

  .chatbox-message-dropdown-menu a {
    font-size: .875rem;
    font-weight: 500;
    color: var(--dark);
    text-decoration: none;
    padding: .5rem 1rem;
    display: block;
  }

  .chatbox-message-dropdown-menu a:hover {
    background: var(--grey);
  }

  .chatbox-message-content {
    background: var(--grey);
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    grid-row-gap: 1rem;
    max-height: 700px;
    height: 350px;
    overflow-y: auto;

  }

  .chatbox-message-item {
    width: 80%;
    padding: 1rem;
  }

  .chatbox-message-item.sent {
    align-self: flex-end;
    background: var(--blue);
    color: var(--white);
    border-radius: .75rem 0 .75rem .75rem;
  }

  .chatbox-message-item.received {
    background: var(--white);
    border-radius: 0 .75rem .75rem .75rem;
    box-shadow: .25rem .25rem 1.5rem rgba(0, 0, 0, .05);
  }

  .chatbox-message-item-time {
    float: right;
    font-size: .75rem;
    margin-top: .5rem;
    display: inline-block;
  }

  .chatbox-message-bottom {
    background: var(--white);
    padding: .75rem 1.5rem;
  }

  .chatbox-message-form {
    display: flex;
    align-items: center;
    background: var(--grey);
    border-radius: .5rem;
    padding: .5rem 1.25rem;
    position: relative;
  }

  .chatbox-message-input {
    background: transparent;
    outline: none;
    border: none;
    resize: none;
    scrollbar-width: none;
  }

  .chatbox-message-input::-webkit-scrollbar {
    display: none;
  }

  .chatbox-message-submit {
    font-size: 1.25rem;
    color: var(--blue);
    background: transparent;
    border: none;
    outline: none;
    cursor: pointer;
    position: absolute;
    right: 0;
    margin-right: 10px;
  }

  .chatbox-message-no-message {
    font-size: 1rem;
    font-weight: 600;
    text-align: center;
  }

  /* CHATBOX */

  .close {
    cursor: pointer;
  }

  .wrapper {
    display: flex;

  }

  .logo {
    margin-right: 5px;
    margin-top: 3px;
  }



  /* BREAKPOINTS */
  @media screen and (max-width: 576px) {
    .chatbox-message-wrapper {
      width: calc(100vw - 2rem);
    }

    .chatbox-wrapper {
      bottom: 1rem;
      right: 1rem;
    }
  }

  /* BREAKPOINTS */
</style>