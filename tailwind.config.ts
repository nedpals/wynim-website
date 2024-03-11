import type { Config } from "tailwindcss";
import colors from "tailwindcss/colors";

const config: Config = {
  content: [
    "./src/pages/**/*.{js,ts,jsx,tsx,mdx}",
    "./src/components/**/*.{js,ts,jsx,tsx,mdx}",
    "./src/app/**/*.{js,ts,jsx,tsx,mdx}",
  ],
  theme: {
    extend: {
      backgroundImage: {
        "gradient-radial": "radial-gradient(var(--tw-gradient-stops))",
        "gradient-conic":
          "conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))",
      },
    },
    colors: {
      "primary": {
        50: "#FAE5E5",
        100: "#F4CDCD",
        200: "#E7A3A2",
        300: "#D67776",
        400: "#C4514F",
        500: "#993F3D",
        600: "#822D2B",
        700: "#621E1D",
        800: "#451312",
        900: "#210807",
        950: "#110303"
      },
      "secondary": {
        50: "#FEF7EB",
        100: "#FDECD3",
        200: "#FBDCAC",
        300: "#FAC980",
        400: "#F8B654",
        500: "#F6A429",
        600: "#DC8809",
        700: "#A66707",
        800: "#714505",
        900: "#362102",
        950: "#1D1201"
      },
      "slate": {
        50: "#E7E9EE",
        100: "#CBD1DC",
        200: "#98A3B9",
        300: "#657595",
        400: "#424C61",
        500: "#20252F",
        600: "#191D24",
        700: "#13151B",
        800: "#0C0E12",
        900: "#060709",
        950: "#040506"
      },
      white: colors.white,
      black: colors.black,
      gray: colors.gray,
    }
  },
  plugins: [],
};
export default config;
