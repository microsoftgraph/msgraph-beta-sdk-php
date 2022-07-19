<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\JoinedGroups\EvaluateDynamicMembership;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EvaluateDynamicMembershipPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $memberId The memberId property
    */
    private ?string $memberId = null;
    
    /**
     * @var string|null $membershipRule The membershipRule property
    */
    private ?string $membershipRule = null;
    
    /**
     * Instantiates a new evaluateDynamicMembershipPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluateDynamicMembershipPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluateDynamicMembershipPostRequestBody {
        return new EvaluateDynamicMembershipPostRequestBody();
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
            'memberId' => function (ParseNode $n) use ($o) { $o->setMemberId($n->getStringValue()); },
            'membershipRule' => function (ParseNode $n) use ($o) { $o->setMembershipRule($n->getStringValue()); },
        ];
    }

    /**
     * Gets the memberId property value. The memberId property
     * @return string|null
    */
    public function getMemberId(): ?string {
        return $this->memberId;
    }

    /**
     * Gets the membershipRule property value. The membershipRule property
     * @return string|null
    */
    public function getMembershipRule(): ?string {
        return $this->membershipRule;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('memberId', $this->memberId);
        $writer->writeStringValue('membershipRule', $this->membershipRule);
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
     * Sets the memberId property value. The memberId property
     *  @param string|null $value Value to set for the memberId property.
    */
    public function setMemberId(?string $value ): void {
        $this->memberId = $value;
    }

    /**
     * Sets the membershipRule property value. The membershipRule property
     *  @param string|null $value Value to set for the membershipRule property.
    */
    public function setMembershipRule(?string $value ): void {
        $this->membershipRule = $value;
    }

}
