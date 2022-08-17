<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationConditionsApplications implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $includeAllApplications The includeAllApplications property
    */
    private ?bool $includeAllApplications = null;
    
    /**
     * @var array<AuthenticationConditionApplication>|null $includeApplications The includeApplications property
    */
    private ?array $includeApplications = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new authenticationConditionsApplications and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.authenticationConditionsApplications');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationConditionsApplications
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationConditionsApplications {
        return new AuthenticationConditionsApplications();
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
            'includeAllApplications' => function (ParseNode $n) use ($o) { $o->setIncludeAllApplications($n->getBooleanValue()); },
            'includeApplications' => function (ParseNode $n) use ($o) { $o->setIncludeApplications($n->getCollectionOfObjectValues(array(AuthenticationConditionApplication::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the includeAllApplications property value. The includeAllApplications property
     * @return bool|null
    */
    public function getIncludeAllApplications(): ?bool {
        return $this->includeAllApplications;
    }

    /**
     * Gets the includeApplications property value. The includeApplications property
     * @return array<AuthenticationConditionApplication>|null
    */
    public function getIncludeApplications(): ?array {
        return $this->includeApplications;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('includeAllApplications', $this->includeAllApplications);
        $writer->writeCollectionOfObjectValues('includeApplications', $this->includeApplications);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the includeAllApplications property value. The includeAllApplications property
     *  @param bool|null $value Value to set for the includeAllApplications property.
    */
    public function setIncludeAllApplications(?bool $value ): void {
        $this->includeAllApplications = $value;
    }

    /**
     * Sets the includeApplications property value. The includeApplications property
     *  @param array<AuthenticationConditionApplication>|null $value Value to set for the includeApplications property.
    */
    public function setIncludeApplications(?array $value ): void {
        $this->includeApplications = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
