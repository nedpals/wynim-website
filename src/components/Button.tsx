import { VariantProps, cva, cx } from "class-variance-authority";
import { GenericComponentProps } from "./generic";

const button = cva("px-8 py-3 font-semibold rounded-full flex items-center space-x-3 transition-colors", {
    variants: {
        intent: {
            primary: "bg-primary-500 hover:bg-primary-600 text-white",
            secondary: "bg-secondary-500 hover:bg-secondary-600 text-slate-500",
        }
    },
    defaultVariants: {
        intent: "primary",
    }
});

export type ButtonProps = VariantProps<typeof button>;

export default function Button<E extends React.ElementType>({ as, intent, className, ...props }: GenericComponentProps<ButtonProps, E>) {
    const Component = as || "button";
    
    return <Component className={cx(className, button({ intent }))} {...props} />;
}