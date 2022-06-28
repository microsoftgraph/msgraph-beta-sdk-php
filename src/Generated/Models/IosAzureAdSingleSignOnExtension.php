<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosAzureAdSingleSignOnExtension extends IosSingleSignOnExtension implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $bundleIdAccessControlList An optional list of additional bundle IDs allowed to use the AAD extension for single sign-on.
    */
    private ?array $bundleIdAccessControlList = null;
    
    /**
     * @var array<KeyTypedValuePair>|null $configurations Gets or sets a list of typed key-value pairs used to configure Credential-type profiles. This collection can contain a maximum of 500 elements.
    */
    private ?array $configurations = null;
    
    /**
     * @var bool|null $enableSharedDeviceMode Enables or disables shared device mode.
    */
    private ?bool $enableSharedDeviceMode = null;
    
    /**
     * Instantiates a new IosAzureAdSingleSignOnExtension and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the bundleIdAccessControlList property value. An optional list of additional bundle IDs allowed to use the AAD extension for single sign-on.
     * @return array<string>|null
    */
    public function getBundleIdAccessControlList(): ?array {
        return $this->bundleIdAccessControlList;
    }

    /**
     * Gets the configurations property value. Gets or sets a list of typed key-value pairs used to configure Credential-type profiles. This collection can contain a maximum of 500 elements.
     * @return array<KeyTypedValuePair>|null
    */
    public function getConfigurations(): ?array {
        return $this->configurations;
    }

    /**
     * Gets the enableSharedDeviceMode property value. Enables or disables shared device mode.
     * @return bool|null
    */
    public function getEnableSharedDeviceMode(): ?bool {
        return $this->enableSharedDeviceMode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bundleIdAccessControlList' => function (ParseNode $n) use ($o) { $o->setBundleIdAccessControlList($n->getCollectionOfPrimitiveValues()); },
            'configurations' => function (ParseNode $n) use ($o) { $o->setConfigurations($n->getCollectionOfObjectValues(array(KeyTypedValuePair::class, 'createFromDiscriminatorValue'))); },
            'enableSharedDeviceMode' => function (ParseNode $n) use ($o) { $o->setEnableSharedDeviceMode($n->getBooleanValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('bundleIdAccessControlList', $this->bundleIdAccessControlList);
        $writer->writeCollectionOfObjectValues('configurations', $this->configurations);
        $writer->writeBooleanValue('enableSharedDeviceMode', $this->enableSharedDeviceMode);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the bundleIdAccessControlList property value. An optional list of additional bundle IDs allowed to use the AAD extension for single sign-on.
     *  @param array<string>|null $value Value to set for the bundleIdAccessControlList property.
    */
    public function setBundleIdAccessControlList(?array $value ): void {
        $this->bundleIdAccessControlList = $value;
    }

    /**
     * Sets the configurations property value. Gets or sets a list of typed key-value pairs used to configure Credential-type profiles. This collection can contain a maximum of 500 elements.
     *  @param array<KeyTypedValuePair>|null $value Value to set for the configurations property.
    */
    public function setConfigurations(?array $value ): void {
        $this->configurations = $value;
    }

    /**
     * Sets the enableSharedDeviceMode property value. Enables or disables shared device mode.
     *  @param bool|null $value Value to set for the enableSharedDeviceMode property.
    */
    public function setEnableSharedDeviceMode(?bool $value ): void {
        $this->enableSharedDeviceMode = $value;
    }

}
