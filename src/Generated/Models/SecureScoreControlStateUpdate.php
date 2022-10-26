<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecureScoreControlStateUpdate implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $assignedTo The assignedTo property
    */
    private ?string $assignedTo = null;
    
    /**
     * @var string|null $comment The comment property
    */
    private ?string $comment = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $state The state property
    */
    private ?string $state = null;
    
    /**
     * @var string|null $updatedBy The updatedBy property
    */
    private ?string $updatedBy = null;
    
    /**
     * @var DateTime|null $updatedDateTime The updatedDateTime property
    */
    private ?DateTime $updatedDateTime = null;
    
    /**
     * Instantiates a new secureScoreControlStateUpdate and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.secureScoreControlStateUpdate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecureScoreControlStateUpdate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecureScoreControlStateUpdate {
        return new SecureScoreControlStateUpdate();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignedTo property value. The assignedTo property
     * @return string|null
    */
    public function getAssignedTo(): ?string {
        return $this->assignedTo;
    }

    /**
     * Gets the comment property value. The comment property
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getStringValue()),
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'updatedBy' => fn(ParseNode $n) => $o->setUpdatedBy($n->getStringValue()),
            'updatedDateTime' => fn(ParseNode $n) => $o->setUpdatedDateTime($n->getDateTimeValue()),
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
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the updatedBy property value. The updatedBy property
     * @return string|null
    */
    public function getUpdatedBy(): ?string {
        return $this->updatedBy;
    }

    /**
     * Gets the updatedDateTime property value. The updatedDateTime property
     * @return DateTime|null
    */
    public function getUpdatedDateTime(): ?DateTime {
        return $this->updatedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('assignedTo', $this->assignedTo);
        $writer->writeStringValue('comment', $this->comment);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('state', $this->state);
        $writer->writeStringValue('updatedBy', $this->updatedBy);
        $writer->writeDateTimeValue('updatedDateTime', $this->updatedDateTime);
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
     * Sets the assignedTo property value. The assignedTo property
     *  @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value ): void {
        $this->assignedTo = $value;
    }

    /**
     * Sets the comment property value. The comment property
     *  @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value ): void {
        $this->comment = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the state property value. The state property
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the updatedBy property value. The updatedBy property
     *  @param string|null $value Value to set for the updatedBy property.
    */
    public function setUpdatedBy(?string $value ): void {
        $this->updatedBy = $value;
    }

    /**
     * Sets the updatedDateTime property value. The updatedDateTime property
     *  @param DateTime|null $value Value to set for the updatedDateTime property.
    */
    public function setUpdatedDateTime(?DateTime $value ): void {
        $this->updatedDateTime = $value;
    }

}
