<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * MacOS extensions configuration profile.
*/
class MacOSExtensionsConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new macOSExtensionsConfiguration and sets the default values.
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'kernelExtensionAllowedTeamIdentifiers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setKernelExtensionAllowedTeamIdentifiers($val);
            },
            'kernelExtensionOverridesAllowed' => fn(ParseNode $n) => $o->setKernelExtensionOverridesAllowed($n->getBooleanValue()),
            'kernelExtensionsAllowed' => fn(ParseNode $n) => $o->setKernelExtensionsAllowed($n->getCollectionOfObjectValues([MacOSKernelExtension::class, 'createFromDiscriminatorValue'])),
            'systemExtensionsAllowed' => fn(ParseNode $n) => $o->setSystemExtensionsAllowed($n->getCollectionOfObjectValues([MacOSSystemExtension::class, 'createFromDiscriminatorValue'])),
            'systemExtensionsAllowedTeamIdentifiers' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSystemExtensionsAllowedTeamIdentifiers($val);
            },
            'systemExtensionsAllowedTypes' => fn(ParseNode $n) => $o->setSystemExtensionsAllowedTypes($n->getCollectionOfObjectValues([MacOSSystemExtensionTypeMapping::class, 'createFromDiscriminatorValue'])),
            'systemExtensionsBlockOverride' => fn(ParseNode $n) => $o->setSystemExtensionsBlockOverride($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the kernelExtensionAllowedTeamIdentifiers property value. All kernel extensions validly signed by the team identifiers in this list will be allowed to load.
     * @return array<string>|null
    */
    public function getKernelExtensionAllowedTeamIdentifiers(): ?array {
        $val = $this->getBackingStore()->get('kernelExtensionAllowedTeamIdentifiers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kernelExtensionAllowedTeamIdentifiers'");
    }

    /**
     * Gets the kernelExtensionOverridesAllowed property value. If set to true, users can approve additional kernel extensions not explicitly allowed by configurations profiles.
     * @return bool|null
    */
    public function getKernelExtensionOverridesAllowed(): ?bool {
        $val = $this->getBackingStore()->get('kernelExtensionOverridesAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kernelExtensionOverridesAllowed'");
    }

    /**
     * Gets the kernelExtensionsAllowed property value. A list of kernel extensions that will be allowed to load. . This collection can contain a maximum of 500 elements.
     * @return array<MacOSKernelExtension>|null
    */
    public function getKernelExtensionsAllowed(): ?array {
        $val = $this->getBackingStore()->get('kernelExtensionsAllowed');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MacOSKernelExtension::class);
            /** @var array<MacOSKernelExtension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kernelExtensionsAllowed'");
    }

    /**
     * Gets the systemExtensionsAllowed property value. Gets or sets a list of allowed macOS system extensions. This collection can contain a maximum of 500 elements.
     * @return array<MacOSSystemExtension>|null
    */
    public function getSystemExtensionsAllowed(): ?array {
        $val = $this->getBackingStore()->get('systemExtensionsAllowed');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MacOSSystemExtension::class);
            /** @var array<MacOSSystemExtension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemExtensionsAllowed'");
    }

    /**
     * Gets the systemExtensionsAllowedTeamIdentifiers property value. Gets or sets a list of allowed team identifiers. Any system extension signed with any of the specified team identifiers will be approved.
     * @return array<string>|null
    */
    public function getSystemExtensionsAllowedTeamIdentifiers(): ?array {
        $val = $this->getBackingStore()->get('systemExtensionsAllowedTeamIdentifiers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemExtensionsAllowedTeamIdentifiers'");
    }

    /**
     * Gets the systemExtensionsAllowedTypes property value. Gets or sets a list of allowed macOS system extension types. This collection can contain a maximum of 500 elements.
     * @return array<MacOSSystemExtensionTypeMapping>|null
    */
    public function getSystemExtensionsAllowedTypes(): ?array {
        $val = $this->getBackingStore()->get('systemExtensionsAllowedTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MacOSSystemExtensionTypeMapping::class);
            /** @var array<MacOSSystemExtensionTypeMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemExtensionsAllowedTypes'");
    }

    /**
     * Gets the systemExtensionsBlockOverride property value. Gets or sets whether to allow the user to approve additional system extensions not explicitly allowed by configuration profiles.
     * @return bool|null
    */
    public function getSystemExtensionsBlockOverride(): ?bool {
        $val = $this->getBackingStore()->get('systemExtensionsBlockOverride');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemExtensionsBlockOverride'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('kernelExtensionAllowedTeamIdentifiers', $this->getKernelExtensionAllowedTeamIdentifiers());
        $writer->writeBooleanValue('kernelExtensionOverridesAllowed', $this->getKernelExtensionOverridesAllowed());
        $writer->writeCollectionOfObjectValues('kernelExtensionsAllowed', $this->getKernelExtensionsAllowed());
        $writer->writeCollectionOfObjectValues('systemExtensionsAllowed', $this->getSystemExtensionsAllowed());
        $writer->writeCollectionOfPrimitiveValues('systemExtensionsAllowedTeamIdentifiers', $this->getSystemExtensionsAllowedTeamIdentifiers());
        $writer->writeCollectionOfObjectValues('systemExtensionsAllowedTypes', $this->getSystemExtensionsAllowedTypes());
        $writer->writeBooleanValue('systemExtensionsBlockOverride', $this->getSystemExtensionsBlockOverride());
    }

    /**
     * Sets the kernelExtensionAllowedTeamIdentifiers property value. All kernel extensions validly signed by the team identifiers in this list will be allowed to load.
     * @param array<string>|null $value Value to set for the kernelExtensionAllowedTeamIdentifiers property.
    */
    public function setKernelExtensionAllowedTeamIdentifiers(?array $value): void {
        $this->getBackingStore()->set('kernelExtensionAllowedTeamIdentifiers', $value);
    }

    /**
     * Sets the kernelExtensionOverridesAllowed property value. If set to true, users can approve additional kernel extensions not explicitly allowed by configurations profiles.
     * @param bool|null $value Value to set for the kernelExtensionOverridesAllowed property.
    */
    public function setKernelExtensionOverridesAllowed(?bool $value): void {
        $this->getBackingStore()->set('kernelExtensionOverridesAllowed', $value);
    }

    /**
     * Sets the kernelExtensionsAllowed property value. A list of kernel extensions that will be allowed to load. . This collection can contain a maximum of 500 elements.
     * @param array<MacOSKernelExtension>|null $value Value to set for the kernelExtensionsAllowed property.
    */
    public function setKernelExtensionsAllowed(?array $value): void {
        $this->getBackingStore()->set('kernelExtensionsAllowed', $value);
    }

    /**
     * Sets the systemExtensionsAllowed property value. Gets or sets a list of allowed macOS system extensions. This collection can contain a maximum of 500 elements.
     * @param array<MacOSSystemExtension>|null $value Value to set for the systemExtensionsAllowed property.
    */
    public function setSystemExtensionsAllowed(?array $value): void {
        $this->getBackingStore()->set('systemExtensionsAllowed', $value);
    }

    /**
     * Sets the systemExtensionsAllowedTeamIdentifiers property value. Gets or sets a list of allowed team identifiers. Any system extension signed with any of the specified team identifiers will be approved.
     * @param array<string>|null $value Value to set for the systemExtensionsAllowedTeamIdentifiers property.
    */
    public function setSystemExtensionsAllowedTeamIdentifiers(?array $value): void {
        $this->getBackingStore()->set('systemExtensionsAllowedTeamIdentifiers', $value);
    }

    /**
     * Sets the systemExtensionsAllowedTypes property value. Gets or sets a list of allowed macOS system extension types. This collection can contain a maximum of 500 elements.
     * @param array<MacOSSystemExtensionTypeMapping>|null $value Value to set for the systemExtensionsAllowedTypes property.
    */
    public function setSystemExtensionsAllowedTypes(?array $value): void {
        $this->getBackingStore()->set('systemExtensionsAllowedTypes', $value);
    }

    /**
     * Sets the systemExtensionsBlockOverride property value. Gets or sets whether to allow the user to approve additional system extensions not explicitly allowed by configuration profiles.
     * @param bool|null $value Value to set for the systemExtensionsBlockOverride property.
    */
    public function setSystemExtensionsBlockOverride(?bool $value): void {
        $this->getBackingStore()->set('systemExtensionsBlockOverride', $value);
    }

}
