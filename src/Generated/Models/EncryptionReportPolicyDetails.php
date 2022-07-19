<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EncryptionReportPolicyDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $policyId Policy Id for Encryption Report
    */
    private ?string $policyId = null;
    
    /**
     * @var string|null $policyName Policy Name for Encryption Report
    */
    private ?string $policyName = null;
    
    /**
     * Instantiates a new encryptionReportPolicyDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.encryptionReportPolicyDetails');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EncryptionReportPolicyDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EncryptionReportPolicyDetails {
        return new EncryptionReportPolicyDetails();
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'policyId' => function (ParseNode $n) use ($o) { $o->setPolicyId($n->getStringValue()); },
            'policyName' => function (ParseNode $n) use ($o) { $o->setPolicyName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the policyId property value. Policy Id for Encryption Report
     * @return string|null
    */
    public function getPolicyId(): ?string {
        return $this->policyId;
    }

    /**
     * Gets the policyName property value. Policy Name for Encryption Report
     * @return string|null
    */
    public function getPolicyName(): ?string {
        return $this->policyName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('policyId', $this->policyId);
        $writer->writeStringValue('policyName', $this->policyName);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the policyId property value. Policy Id for Encryption Report
     *  @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value ): void {
        $this->policyId = $value;
    }

    /**
     * Sets the policyName property value. Policy Name for Encryption Report
     *  @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value ): void {
        $this->policyName = $value;
    }

}
