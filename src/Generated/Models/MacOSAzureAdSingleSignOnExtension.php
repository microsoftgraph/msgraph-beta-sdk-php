<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents an Azure AD-type Single Sign-On extension profile for macOS devices.
*/
class MacOSAzureAdSingleSignOnExtension extends MacOSSingleSignOnExtension implements Parsable 
{
    /**
     * Instantiates a new MacOSAzureAdSingleSignOnExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSAzureAdSingleSignOnExtension');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSAzureAdSingleSignOnExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSAzureAdSingleSignOnExtension {
        return new MacOSAzureAdSingleSignOnExtension();
    }

    /**
     * Gets the bundleIdAccessControlList property value. An optional list of additional bundle IDs allowed to use the AAD extension for single sign-on.
     * @return array<string>|null
    */
    public function getBundleIdAccessControlList(): ?array {
        $val = $this->getBackingStore()->get('bundleIdAccessControlList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bundleIdAccessControlList'");
    }

    /**
     * Gets the configurations property value. Gets or sets a list of typed key-value pairs used to configure Credential-type profiles. This collection can contain a maximum of 500 elements.
     * @return array<KeyTypedValuePair>|null
    */
    public function getConfigurations(): ?array {
        $val = $this->getBackingStore()->get('configurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyTypedValuePair::class);
            /** @var array<KeyTypedValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurations'");
    }

    /**
     * Gets the enableSharedDeviceMode property value. Enables or disables shared device mode.
     * @return bool|null
    */
    public function getEnableSharedDeviceMode(): ?bool {
        $val = $this->getBackingStore()->get('enableSharedDeviceMode');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableSharedDeviceMode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bundleIdAccessControlList' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBundleIdAccessControlList($val);
            },
            'configurations' => fn(ParseNode $n) => $o->setConfigurations($n->getCollectionOfObjectValues([KeyTypedValuePair::class, 'createFromDiscriminatorValue'])),
            'enableSharedDeviceMode' => fn(ParseNode $n) => $o->setEnableSharedDeviceMode($n->getBooleanValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('bundleIdAccessControlList', $this->getBundleIdAccessControlList());
        $writer->writeCollectionOfObjectValues('configurations', $this->getConfigurations());
        $writer->writeBooleanValue('enableSharedDeviceMode', $this->getEnableSharedDeviceMode());
    }

    /**
     * Sets the bundleIdAccessControlList property value. An optional list of additional bundle IDs allowed to use the AAD extension for single sign-on.
     * @param array<string>|null $value Value to set for the bundleIdAccessControlList property.
    */
    public function setBundleIdAccessControlList(?array $value): void {
        $this->getBackingStore()->set('bundleIdAccessControlList', $value);
    }

    /**
     * Sets the configurations property value. Gets or sets a list of typed key-value pairs used to configure Credential-type profiles. This collection can contain a maximum of 500 elements.
     * @param array<KeyTypedValuePair>|null $value Value to set for the configurations property.
    */
    public function setConfigurations(?array $value): void {
        $this->getBackingStore()->set('configurations', $value);
    }

    /**
     * Sets the enableSharedDeviceMode property value. Enables or disables shared device mode.
     * @param bool|null $value Value to set for the enableSharedDeviceMode property.
    */
    public function setEnableSharedDeviceMode(?bool $value): void {
        $this->getBackingStore()->set('enableSharedDeviceMode', $value);
    }

}
