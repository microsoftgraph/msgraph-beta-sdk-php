<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSExtensionsConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var array<string>|null $kernelExtensionAllowedTeamIdentifiers All kernel extensions validly signed by the team identifiers in this list will be allowed to load.
    */
    private ?array $kernelExtensionAllowedTeamIdentifiers = null;
    
    /**
     * @var bool|null $kernelExtensionOverridesAllowed If set to true, users can approve additional kernel extensions not explicitly allowed by configurations profiles.
    */
    private ?bool $kernelExtensionOverridesAllowed = null;
    
    /**
     * @var array<MacOSKernelExtension>|null $kernelExtensionsAllowed A list of kernel extensions that will be allowed to load. . This collection can contain a maximum of 500 elements.
    */
    private ?array $kernelExtensionsAllowed = null;
    
    /**
     * @var array<MacOSSystemExtension>|null $systemExtensionsAllowed Gets or sets a list of allowed macOS system extensions. This collection can contain a maximum of 500 elements.
    */
    private ?array $systemExtensionsAllowed = null;
    
    /**
     * @var array<string>|null $systemExtensionsAllowedTeamIdentifiers Gets or sets a list of allowed team identifiers. Any system extension signed with any of the specified team identifiers will be approved.
    */
    private ?array $systemExtensionsAllowedTeamIdentifiers = null;
    
    /**
     * @var array<MacOSSystemExtensionTypeMapping>|null $systemExtensionsAllowedTypes Gets or sets a list of allowed macOS system extension types. This collection can contain a maximum of 500 elements.
    */
    private ?array $systemExtensionsAllowedTypes = null;
    
    /**
     * @var bool|null $systemExtensionsBlockOverride Gets or sets whether to allow the user to approve additional system extensions not explicitly allowed by configuration profiles.
    */
    private ?bool $systemExtensionsBlockOverride = null;
    
    /**
     * Instantiates a new MacOSExtensionsConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSExtensionsConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSExtensionsConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSExtensionsConfiguration {
        return new MacOSExtensionsConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'kernelExtensionAllowedTeamIdentifiers' => function (ParseNode $n) use ($o) { $o->setKernelExtensionAllowedTeamIdentifiers($n->getCollectionOfPrimitiveValues()); },
            'kernelExtensionOverridesAllowed' => function (ParseNode $n) use ($o) { $o->setKernelExtensionOverridesAllowed($n->getBooleanValue()); },
            'kernelExtensionsAllowed' => function (ParseNode $n) use ($o) { $o->setKernelExtensionsAllowed($n->getCollectionOfObjectValues(array(MacOSKernelExtension::class, 'createFromDiscriminatorValue'))); },
            'systemExtensionsAllowed' => function (ParseNode $n) use ($o) { $o->setSystemExtensionsAllowed($n->getCollectionOfObjectValues(array(MacOSSystemExtension::class, 'createFromDiscriminatorValue'))); },
            'systemExtensionsAllowedTeamIdentifiers' => function (ParseNode $n) use ($o) { $o->setSystemExtensionsAllowedTeamIdentifiers($n->getCollectionOfPrimitiveValues()); },
            'systemExtensionsAllowedTypes' => function (ParseNode $n) use ($o) { $o->setSystemExtensionsAllowedTypes($n->getCollectionOfObjectValues(array(MacOSSystemExtensionTypeMapping::class, 'createFromDiscriminatorValue'))); },
            'systemExtensionsBlockOverride' => function (ParseNode $n) use ($o) { $o->setSystemExtensionsBlockOverride($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the kernelExtensionAllowedTeamIdentifiers property value. All kernel extensions validly signed by the team identifiers in this list will be allowed to load.
     * @return array<string>|null
    */
    public function getKernelExtensionAllowedTeamIdentifiers(): ?array {
        return $this->kernelExtensionAllowedTeamIdentifiers;
    }

    /**
     * Gets the kernelExtensionOverridesAllowed property value. If set to true, users can approve additional kernel extensions not explicitly allowed by configurations profiles.
     * @return bool|null
    */
    public function getKernelExtensionOverridesAllowed(): ?bool {
        return $this->kernelExtensionOverridesAllowed;
    }

    /**
     * Gets the kernelExtensionsAllowed property value. A list of kernel extensions that will be allowed to load. . This collection can contain a maximum of 500 elements.
     * @return array<MacOSKernelExtension>|null
    */
    public function getKernelExtensionsAllowed(): ?array {
        return $this->kernelExtensionsAllowed;
    }

    /**
     * Gets the systemExtensionsAllowed property value. Gets or sets a list of allowed macOS system extensions. This collection can contain a maximum of 500 elements.
     * @return array<MacOSSystemExtension>|null
    */
    public function getSystemExtensionsAllowed(): ?array {
        return $this->systemExtensionsAllowed;
    }

    /**
     * Gets the systemExtensionsAllowedTeamIdentifiers property value. Gets or sets a list of allowed team identifiers. Any system extension signed with any of the specified team identifiers will be approved.
     * @return array<string>|null
    */
    public function getSystemExtensionsAllowedTeamIdentifiers(): ?array {
        return $this->systemExtensionsAllowedTeamIdentifiers;
    }

    /**
     * Gets the systemExtensionsAllowedTypes property value. Gets or sets a list of allowed macOS system extension types. This collection can contain a maximum of 500 elements.
     * @return array<MacOSSystemExtensionTypeMapping>|null
    */
    public function getSystemExtensionsAllowedTypes(): ?array {
        return $this->systemExtensionsAllowedTypes;
    }

    /**
     * Gets the systemExtensionsBlockOverride property value. Gets or sets whether to allow the user to approve additional system extensions not explicitly allowed by configuration profiles.
     * @return bool|null
    */
    public function getSystemExtensionsBlockOverride(): ?bool {
        return $this->systemExtensionsBlockOverride;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('kernelExtensionAllowedTeamIdentifiers', $this->kernelExtensionAllowedTeamIdentifiers);
        $writer->writeBooleanValue('kernelExtensionOverridesAllowed', $this->kernelExtensionOverridesAllowed);
        $writer->writeCollectionOfObjectValues('kernelExtensionsAllowed', $this->kernelExtensionsAllowed);
        $writer->writeCollectionOfObjectValues('systemExtensionsAllowed', $this->systemExtensionsAllowed);
        $writer->writeCollectionOfPrimitiveValues('systemExtensionsAllowedTeamIdentifiers', $this->systemExtensionsAllowedTeamIdentifiers);
        $writer->writeCollectionOfObjectValues('systemExtensionsAllowedTypes', $this->systemExtensionsAllowedTypes);
        $writer->writeBooleanValue('systemExtensionsBlockOverride', $this->systemExtensionsBlockOverride);
    }

    /**
     * Sets the kernelExtensionAllowedTeamIdentifiers property value. All kernel extensions validly signed by the team identifiers in this list will be allowed to load.
     *  @param array<string>|null $value Value to set for the kernelExtensionAllowedTeamIdentifiers property.
    */
    public function setKernelExtensionAllowedTeamIdentifiers(?array $value ): void {
        $this->kernelExtensionAllowedTeamIdentifiers = $value;
    }

    /**
     * Sets the kernelExtensionOverridesAllowed property value. If set to true, users can approve additional kernel extensions not explicitly allowed by configurations profiles.
     *  @param bool|null $value Value to set for the kernelExtensionOverridesAllowed property.
    */
    public function setKernelExtensionOverridesAllowed(?bool $value ): void {
        $this->kernelExtensionOverridesAllowed = $value;
    }

    /**
     * Sets the kernelExtensionsAllowed property value. A list of kernel extensions that will be allowed to load. . This collection can contain a maximum of 500 elements.
     *  @param array<MacOSKernelExtension>|null $value Value to set for the kernelExtensionsAllowed property.
    */
    public function setKernelExtensionsAllowed(?array $value ): void {
        $this->kernelExtensionsAllowed = $value;
    }

    /**
     * Sets the systemExtensionsAllowed property value. Gets or sets a list of allowed macOS system extensions. This collection can contain a maximum of 500 elements.
     *  @param array<MacOSSystemExtension>|null $value Value to set for the systemExtensionsAllowed property.
    */
    public function setSystemExtensionsAllowed(?array $value ): void {
        $this->systemExtensionsAllowed = $value;
    }

    /**
     * Sets the systemExtensionsAllowedTeamIdentifiers property value. Gets or sets a list of allowed team identifiers. Any system extension signed with any of the specified team identifiers will be approved.
     *  @param array<string>|null $value Value to set for the systemExtensionsAllowedTeamIdentifiers property.
    */
    public function setSystemExtensionsAllowedTeamIdentifiers(?array $value ): void {
        $this->systemExtensionsAllowedTeamIdentifiers = $value;
    }

    /**
     * Sets the systemExtensionsAllowedTypes property value. Gets or sets a list of allowed macOS system extension types. This collection can contain a maximum of 500 elements.
     *  @param array<MacOSSystemExtensionTypeMapping>|null $value Value to set for the systemExtensionsAllowedTypes property.
    */
    public function setSystemExtensionsAllowedTypes(?array $value ): void {
        $this->systemExtensionsAllowedTypes = $value;
    }

    /**
     * Sets the systemExtensionsBlockOverride property value. Gets or sets whether to allow the user to approve additional system extensions not explicitly allowed by configuration profiles.
     *  @param bool|null $value Value to set for the systemExtensionsBlockOverride property.
    */
    public function setSystemExtensionsBlockOverride(?bool $value ): void {
        $this->systemExtensionsBlockOverride = $value;
    }

}
