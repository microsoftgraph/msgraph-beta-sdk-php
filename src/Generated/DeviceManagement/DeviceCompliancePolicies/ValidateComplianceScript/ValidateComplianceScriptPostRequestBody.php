<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\DeviceCompliancePolicies\ValidateComplianceScript;

use Microsoft\Graph\Beta\Generated\Models\DeviceCompliancePolicyScript;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ValidateComplianceScriptPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceCompliancePolicyScript|null $deviceCompliancePolicyScript The deviceCompliancePolicyScript property
    */
    private ?DeviceCompliancePolicyScript $deviceCompliancePolicyScript = null;
    
    /**
     * Instantiates a new validateComplianceScriptPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ValidateComplianceScriptPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ValidateComplianceScriptPostRequestBody {
        return new ValidateComplianceScriptPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceCompliancePolicyScript property value. The deviceCompliancePolicyScript property
     * @return DeviceCompliancePolicyScript|null
    */
    public function getDeviceCompliancePolicyScript(): ?DeviceCompliancePolicyScript {
        return $this->deviceCompliancePolicyScript;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceCompliancePolicyScript' => function (ParseNode $n) use ($o) { $o->setDeviceCompliancePolicyScript($n->getObjectValue(array(DeviceCompliancePolicyScript::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('deviceCompliancePolicyScript', $this->deviceCompliancePolicyScript);
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
     * Sets the deviceCompliancePolicyScript property value. The deviceCompliancePolicyScript property
     *  @param DeviceCompliancePolicyScript|null $value Value to set for the deviceCompliancePolicyScript property.
    */
    public function setDeviceCompliancePolicyScript(?DeviceCompliancePolicyScript $value ): void {
        $this->deviceCompliancePolicyScript = $value;
    }

}
