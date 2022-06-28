<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserConsentRequest extends Request implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Approval|null $approval Approval decisions associated with a request.
    */
    private ?Approval $approval = null;
    
    /**
     * @var string|null $reason The user's justification for requiring access to the app. Supports $filter (eq only) and $orderby.
    */
    private ?string $reason = null;
    
    /**
     * Instantiates a new UserConsentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserConsentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserConsentRequest {
        return new UserConsentRequest();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the approval property value. Approval decisions associated with a request.
     * @return Approval|null
    */
    public function getApproval(): ?Approval {
        return $this->approval;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'approval' => function (ParseNode $n) use ($o) { $o->setApproval($n->getObjectValue(array(Approval::class, 'createFromDiscriminatorValue'))); },
            'reason' => function (ParseNode $n) use ($o) { $o->setReason($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the reason property value. The user's justification for requiring access to the app. Supports $filter (eq only) and $orderby.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('approval', $this->approval);
        $writer->writeStringValue('reason', $this->reason);
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
     * Sets the approval property value. Approval decisions associated with a request.
     *  @param Approval|null $value Value to set for the approval property.
    */
    public function setApproval(?Approval $value ): void {
        $this->approval = $value;
    }

    /**
     * Sets the reason property value. The user's justification for requiring access to the app. Supports $filter (eq only) and $orderby.
     *  @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value ): void {
        $this->reason = $value;
    }

}
