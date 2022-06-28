<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingFileConstraint extends DeviceManagementConstraint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $supportedExtensions Acceptable file extensions to upload for this setting
    */
    private ?array $supportedExtensions = null;
    
    /**
     * Instantiates a new DeviceManagementSettingFileConstraint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingFileConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingFileConstraint {
        return new DeviceManagementSettingFileConstraint();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'supportedExtensions' => function (ParseNode $n) use ($o) { $o->setSupportedExtensions($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the supportedExtensions property value. Acceptable file extensions to upload for this setting
     * @return array<string>|null
    */
    public function getSupportedExtensions(): ?array {
        return $this->supportedExtensions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('supportedExtensions', $this->supportedExtensions);
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
     * Sets the supportedExtensions property value. Acceptable file extensions to upload for this setting
     *  @param array<string>|null $value Value to set for the supportedExtensions property.
    */
    public function setSupportedExtensions(?array $value ): void {
        $this->supportedExtensions = $value;
    }

}
