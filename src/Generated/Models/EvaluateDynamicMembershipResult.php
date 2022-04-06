<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EvaluateDynamicMembershipResult implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $membershipRule If a group ID is provided, the value is the membership rule for the group. If a group ID is not provided, the value is the membership rule that was provided as a parameter. For more information, see Dynamic membership rules for groups in Azure Active Directory. */
    private ?string $membershipRule = null;
    
    /** @var ExpressionEvaluationDetails|null $membershipRuleEvaluationDetails Provides a detailed anaylsis of the membership evaluation result. */
    private ?ExpressionEvaluationDetails $membershipRuleEvaluationDetails = null;
    
    /** @var bool|null $membershipRuleEvaluationResult The value is true if the user or device is a member of the group. The value can also be true if a membership rule was provided and the user or device passes the rule evaluation; otherwise false. */
    private ?bool $membershipRuleEvaluationResult = null;
    
    /**
     * Instantiates a new evaluateDynamicMembershipResult and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluateDynamicMembershipResult
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EvaluateDynamicMembershipResult {
        return new EvaluateDynamicMembershipResult();
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
        return  [
            'membershipRule' => function (self $o, ParseNode $n) { $o->setMembershipRule($n->getStringValue()); },
            'membershipRuleEvaluationDetails' => function (self $o, ParseNode $n) { $o->setMembershipRuleEvaluationDetails($n->getObjectValue(ExpressionEvaluationDetails::class)); },
            'membershipRuleEvaluationResult' => function (self $o, ParseNode $n) { $o->setMembershipRuleEvaluationResult($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the membershipRule property value. If a group ID is provided, the value is the membership rule for the group. If a group ID is not provided, the value is the membership rule that was provided as a parameter. For more information, see Dynamic membership rules for groups in Azure Active Directory.
     * @return string|null
    */
    public function getMembershipRule(): ?string {
        return $this->membershipRule;
    }

    /**
     * Gets the membershipRuleEvaluationDetails property value. Provides a detailed anaylsis of the membership evaluation result.
     * @return ExpressionEvaluationDetails|null
    */
    public function getMembershipRuleEvaluationDetails(): ?ExpressionEvaluationDetails {
        return $this->membershipRuleEvaluationDetails;
    }

    /**
     * Gets the membershipRuleEvaluationResult property value. The value is true if the user or device is a member of the group. The value can also be true if a membership rule was provided and the user or device passes the rule evaluation; otherwise false.
     * @return bool|null
    */
    public function getMembershipRuleEvaluationResult(): ?bool {
        return $this->membershipRuleEvaluationResult;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('membershipRule', $this->membershipRule);
        $writer->writeObjectValue('membershipRuleEvaluationDetails', $this->membershipRuleEvaluationDetails);
        $writer->writeBooleanValue('membershipRuleEvaluationResult', $this->membershipRuleEvaluationResult);
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
     * Sets the membershipRule property value. If a group ID is provided, the value is the membership rule for the group. If a group ID is not provided, the value is the membership rule that was provided as a parameter. For more information, see Dynamic membership rules for groups in Azure Active Directory.
     *  @param string|null $value Value to set for the membershipRule property.
    */
    public function setMembershipRule(?string $value ): void {
        $this->membershipRule = $value;
    }

    /**
     * Sets the membershipRuleEvaluationDetails property value. Provides a detailed anaylsis of the membership evaluation result.
     *  @param ExpressionEvaluationDetails|null $value Value to set for the membershipRuleEvaluationDetails property.
    */
    public function setMembershipRuleEvaluationDetails(?ExpressionEvaluationDetails $value ): void {
        $this->membershipRuleEvaluationDetails = $value;
    }

    /**
     * Sets the membershipRuleEvaluationResult property value. The value is true if the user or device is a member of the group. The value can also be true if a membership rule was provided and the user or device passes the rule evaluation; otherwise false.
     *  @param bool|null $value Value to set for the membershipRuleEvaluationResult property.
    */
    public function setMembershipRuleEvaluationResult(?bool $value ): void {
        $this->membershipRuleEvaluationResult = $value;
    }

}
