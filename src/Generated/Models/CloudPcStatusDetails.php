<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcStatusDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<KeyValuePair>|null $additionalInformation Any additional information about the Cloud PC status.
    */
    private ?array $additionalInformation = null;
    
    /**
     * @var string|null $code The code associated with the Cloud PC status.
    */
    private ?string $code = null;
    
    /**
     * @var string|null $message The status message.
    */
    private ?string $message = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new cloudPcStatusDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.cloudPcStatusDetails');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcStatusDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcStatusDetails {
        return new CloudPcStatusDetails();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalInformation property value. Any additional information about the Cloud PC status.
     * @return array<KeyValuePair>|null
    */
    public function getAdditionalInformation(): ?array {
        return $this->additionalInformation;
    }

    /**
     * Gets the code property value. The code associated with the Cloud PC status.
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalInformation' => function (ParseNode $n) use ($o) { $o->setAdditionalInformation($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'code' => function (ParseNode $n) use ($o) { $o->setCode($n->getStringValue()); },
            'message' => function (ParseNode $n) use ($o) { $o->setMessage($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the message property value. The status message.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
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
        $writer->writeCollectionOfObjectValues('additionalInformation', $this->additionalInformation);
        $writer->writeStringValue('code', $this->code);
        $writer->writeStringValue('message', $this->message);
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
     * Sets the additionalInformation property value. Any additional information about the Cloud PC status.
     *  @param array<KeyValuePair>|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?array $value ): void {
        $this->additionalInformation = $value;
    }

    /**
     * Sets the code property value. The code associated with the Cloud PC status.
     *  @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value ): void {
        $this->code = $value;
    }

    /**
     * Sets the message property value. The status message.
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
