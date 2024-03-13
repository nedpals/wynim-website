export type GenericComponentProps<P extends {}, E extends React.ElementType> = 
    { as?: E, children: React.ReactNode } & P & React.ComponentPropsWithoutRef<E>;