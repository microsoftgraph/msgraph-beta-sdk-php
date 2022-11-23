<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EvaluateDynamicMembershipResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new evaluateDynamicMembershipResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EvaluateDynamicMembershipResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EvaluateDynamicMembershipResult {
        return new EvaluateDynamicMembershipResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'membershipRule' => fn(ParseNode $n) => $o->setMembershipRule($n->getStringValue()),
            'membershipRuleEvaluationDetails' => fn(ParseNode $n) => $o->setMembershipRuleEvaluationDetails($n->getObjectValue([ExpressionEvaluationDetails::class, 'createFromDiscriminatorValue'])),
            'membershipRuleEvaluationResult' => fn(ParseNode $n) => $o->setMembershipRuleEvaluationResult($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the membershipRule property value. If a group ID is provided, the value is the membership rule for the group. If a group ID is not provided, the value is the membership rule that was provided as a parameter. For more information, see Dynamic membership rules for groups in Azure Active Directory.
     * @return string|null
    */
    public function getMembershipRule(): ?string {
        return $this->getBackingStore()->get('membershipRule');
    }

    /**
     * Gets the membershipRuleEvaluationDetails property value. Provides a detailed anaylsis of the membership evaluation result.
     * @return ExpressionEvaluationDetails|null
    */
    public function getMembershipRuleEvaluationDetails(): ?ExpressionEvaluationDetails {
        return $this->getBackingStore()->get('membershipRuleEvaluationDetails');
    }

    /**
     * Gets the membershipRuleEvaluationResult property value. The value is true if the user or device is a member of the group. The value can also be true if a membership rule was provided and the user or device passes the rule evaluation; otherwise false.
     * @return bool|null
    */
    public function getMembershipRuleEvaluationResult(): ?bool {
        return $this->getBackingStore()->get('membershipRuleEvaluationResult');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('membershipRule', $this->getMembershipRule());
        $writer->writeObjectValue('membershipRuleEvaluationDetails', $this->getMembershipRuleEvaluationDetails());
        $writer->writeBooleanValue('membershipRuleEvaluationResult', $this->getMembershipRuleEvaluationResult());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the membershipRule property value. If a group ID is provided, the value is the membership rule for the group. If a group ID is not provided, the value is the membership rule that was provided as a parameter. For more information, see Dynamic membership rules for groups in Azure Active Directory.
     *  @param string|null $value Value to set for the membershipRule property.
    */
    public function setMembershipRule(?string $value): void {
        $this->getBackingStore()->set('membershipRule', $value);
    }

    /**
     * Sets the membershipRuleEvaluationDetails property value. Provides a detailed anaylsis of the membership evaluation result.
     *  @param ExpressionEvaluationDetails|null $value Value to set for the membershipRuleEvaluationDetails property.
    */
    public function setMembershipRuleEvaluationDetails(?ExpressionEvaluationDetails $value): void {
        $this->getBackingStore()->set('membershipRuleEvaluationDetails', $value);
    }

    /**
     * Sets the membershipRuleEvaluationResult property value. The value is true if the user or device is a member of the group. The value can also be true if a membership rule was provided and the user or device passes the rule evaluation; otherwise false.
     *  @param bool|null $value Value to set for the membershipRuleEvaluationResult property.
    */
    public function setMembershipRuleEvaluationResult(?bool $value): void {
        $this->getBackingStore()->set('membershipRuleEvaluationResult', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
