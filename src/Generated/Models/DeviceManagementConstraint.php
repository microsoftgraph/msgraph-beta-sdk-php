<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConstraint implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * Instantiates a new deviceManagementConstraint and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConstraint {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementEnumConstraint': return new DeviceManagementEnumConstraint();
                case '#microsoft.graph.deviceManagementIntentSettingSecretConstraint': return new DeviceManagementIntentSettingSecretConstraint();
                case '#microsoft.graph.deviceManagementSettingAbstractImplementationConstraint': return new DeviceManagementSettingAbstractImplementationConstraint();
                case '#microsoft.graph.deviceManagementSettingAppConstraint': return new DeviceManagementSettingAppConstraint();
                case '#microsoft.graph.deviceManagementSettingBooleanConstraint': return new DeviceManagementSettingBooleanConstraint();
                case '#microsoft.graph.deviceManagementSettingCollectionConstraint': return new DeviceManagementSettingCollectionConstraint();
                case '#microsoft.graph.deviceManagementSettingEnrollmentTypeConstraint': return new DeviceManagementSettingEnrollmentTypeConstraint();
                case '#microsoft.graph.deviceManagementSettingFileConstraint': return new DeviceManagementSettingFileConstraint();
                case '#microsoft.graph.deviceManagementSettingIntegerConstraint': return new DeviceManagementSettingIntegerConstraint();
                case '#microsoft.graph.deviceManagementSettingProfileConstraint': return new DeviceManagementSettingProfileConstraint();
                case '#microsoft.graph.deviceManagementSettingRegexConstraint': return new DeviceManagementSettingRegexConstraint();
                case '#microsoft.graph.deviceManagementSettingRequiredConstraint': return new DeviceManagementSettingRequiredConstraint();
                case '#microsoft.graph.deviceManagementSettingSddlConstraint': return new DeviceManagementSettingSddlConstraint();
                case '#microsoft.graph.deviceManagementSettingStringLengthConstraint': return new DeviceManagementSettingStringLengthConstraint();
                case '#microsoft.graph.deviceManagementSettingXmlConstraint': return new DeviceManagementSettingXmlConstraint();
            }
        }
        return new DeviceManagementConstraint();
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
        return  [
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

}
