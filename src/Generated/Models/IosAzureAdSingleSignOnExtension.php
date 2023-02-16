<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosAzureAdSingleSignOnExtension extends IosSingleSignOnExtension implements Parsable 
{
    /**
     * Instantiates a new IosAzureAdSingleSignOnExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosAzureAdSingleSignOnExtension');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosAzureAdSingleSignOnExtension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosAzureAdSingleSignOnExtension {
        return new IosAzureAdSingleSignOnExtension();
    }

    /**
     * Gets the bundleIdAccessControlList property value. An optional list of additional bundle IDs allowed to use the AAD extension for single sign-on.
     * @return array<string>|null
    */
    public function getBundleIdAccessControlList(): ?array {
        return $this->getBackingStore()->get('bundleIdAccessControlList');
    }

    /**
     * Gets the configurations property value. Gets or sets a list of typed key-value pairs used to configure Credential-type profiles. This collection can contain a maximum of 500 elements.
     * @return array<KeyTypedValuePair>|null
    */
    public function getConfigurations(): ?array {
        return $this->getBackingStore()->get('configurations');
    }

    /**
     * Gets the enableSharedDeviceMode property value. Enables or disables shared device mode.
     * @return bool|null
    */
    public function getEnableSharedDeviceMode(): ?bool {
        return $this->getBackingStore()->get('enableSharedDeviceMode');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bundleIdAccessControlList' => fn(ParseNode $n) => $o->setBundleIdAccessControlList($n->getCollectionOfPrimitiveValues()),
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
