<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MembershipRuleProcessingStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $errorMessage Detailed error message if dynamic group processing ran into an error.  Optional. Read-only.
    */
    private ?string $errorMessage = null;
    
    /**
     * @var DateTime|null $lastMembershipUpdated Most recent date and time when membership of a dynamic group was updated.  Optional. Read-only.
    */
    private ?DateTime $lastMembershipUpdated = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var MembershipRuleProcessingStatusDetails|null $status Current status of a dynamic group processing. Possible values are: NotStarted, Running, Succeeded, Failed, and UnknownFutureValue.  Required. Read-only.
    */
    private ?MembershipRuleProcessingStatusDetails $status = null;
    
    /**
     * Instantiates a new membershipRuleProcessingStatus and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.membershipRuleProcessingStatus');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MembershipRuleProcessingStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MembershipRuleProcessingStatus {
        return new MembershipRuleProcessingStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the errorMessage property value. Detailed error message if dynamic group processing ran into an error.  Optional. Read-only.
     * @return string|null
    */
    public function getErrorMessage(): ?string {
        return $this->errorMessage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errorMessage' => function (ParseNode $n) use ($o) { $o->setErrorMessage($n->getStringValue()); },
            'lastMembershipUpdated' => function (ParseNode $n) use ($o) { $o->setLastMembershipUpdated($n->getDateTimeValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(MembershipRuleProcessingStatusDetails::class)); },
        ];
    }

    /**
     * Gets the lastMembershipUpdated property value. Most recent date and time when membership of a dynamic group was updated.  Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastMembershipUpdated(): ?DateTime {
        return $this->lastMembershipUpdated;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the status property value. Current status of a dynamic group processing. Possible values are: NotStarted, Running, Succeeded, Failed, and UnknownFutureValue.  Required. Read-only.
     * @return MembershipRuleProcessingStatusDetails|null
    */
    public function getStatus(): ?MembershipRuleProcessingStatusDetails {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('errorMessage', $this->errorMessage);
        $writer->writeDateTimeValue('lastMembershipUpdated', $this->lastMembershipUpdated);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('status', $this->status);
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
     * Sets the errorMessage property value. Detailed error message if dynamic group processing ran into an error.  Optional. Read-only.
     *  @param string|null $value Value to set for the errorMessage property.
    */
    public function setErrorMessage(?string $value ): void {
        $this->errorMessage = $value;
    }

    /**
     * Sets the lastMembershipUpdated property value. Most recent date and time when membership of a dynamic group was updated.  Optional. Read-only.
     *  @param DateTime|null $value Value to set for the lastMembershipUpdated property.
    */
    public function setLastMembershipUpdated(?DateTime $value ): void {
        $this->lastMembershipUpdated = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the status property value. Current status of a dynamic group processing. Possible values are: NotStarted, Running, Succeeded, Failed, and UnknownFutureValue.  Required. Read-only.
     *  @param MembershipRuleProcessingStatusDetails|null $value Value to set for the status property.
    */
    public function setStatus(?MembershipRuleProcessingStatusDetails $value ): void {
        $this->status = $value;
    }

}
