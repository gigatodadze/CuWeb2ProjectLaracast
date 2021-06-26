import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Typograpgy from "./components/Typograpgy";
import Illustrations from "./components/Illustrations";
import Mascot from "./components/Mascot";
import Wallpapers from "./components/Wallpapers";
import NotFound from "./components/NotFound";
import SiteStats from "./components/SiteStats";
let LoadersAndAnimations = () => import(
    "./components/LoadersAndAnimations"
    ) ;

export default {
    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [
        // {
        //   path: '*',
        //   component:   NotFound
        // },
        {
            path: '/',
            component: Logo
        },
        {
            path: '/logo-symbol',
            component: LogoSymbol
        },
        {
            path: '/colors',
            component: Colors
        },
        {
            path: '/typograpgy',
            component: Typograpgy
        },
        {
            path: '/illustrations',
            component: Illustrations
        },
        {
            path: '/loaders-and-animations',
            component: LoadersAndAnimations
        },
        {
            path: '/mascot',
            component: Mascot
        },
        {
            path: '/site-stats',
            component: SiteStats
        },
        {
            path: '/wallpapers',
            component: Wallpapers
        },
    ]
};
