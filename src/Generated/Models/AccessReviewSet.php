<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewSet extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<AccessReviewInstanceDecisionItem>|null $decisions Represents an Azure AD access review decision on an instance of a review.
    */
    private ?array $decisions = null;
    
    /**
     * @var array<AccessReviewScheduleDefinition>|null $definitions Represents the template and scheduling for an access review.
    */
    private ?array $definitions = null;
    
    /**
     * @var array<AccessReviewHistoryDefinition>|null $historyDefinitions Represents a collection of access review history data and the scopes used to collect that data.
    */
    private ?array $historyDefinitions = null;
    
    /**
     * @var AccessReviewPolicy|null $policy Resource that enables administrators to manage directory-level access review policies in their tenant.
    */
    private ?AccessReviewPolicy $policy = null;
    
    /**
     * Instantiates a new AccessReviewSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewSet {
        return new AccessReviewSet();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the decisions property value. Represents an Azure AD access review decision on an instance of a review.
     * @return array<AccessReviewInstanceDecisionItem>|null
    */
    public function getDecisions(): ?array {
        return $this->decisions;
    }

    /**
     * Gets the definitions property value. Represents the template and scheduling for an access review.
     * @return array<AccessReviewScheduleDefinition>|null
    */
    public function getDefinitions(): ?array {
        return $this->definitions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'decisions' => function (ParseNode $n) use ($o) { $o->setDecisions($n->getCollectionOfObjectValues(array(AccessReviewInstanceDecisionItem::class, 'createFromDiscriminatorValue'))); },
            'definitions' => function (ParseNode $n) use ($o) { $o->setDefinitions($n->getCollectionOfObjectValues(array(AccessReviewScheduleDefinition::class, 'createFromDiscriminatorValue'))); },
            'historyDefinitions' => function (ParseNode $n) use ($o) { $o->setHistoryDefinitions($n->getCollectionOfObjectValues(array(AccessReviewHistoryDefinition::class, 'createFromDiscriminatorValue'))); },
            'policy' => function (ParseNode $n) use ($o) { $o->setPolicy($n->getObjectValue(array(AccessReviewPolicy::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the historyDefinitions property value. Represents a collection of access review history data and the scopes used to collect that data.
     * @return array<AccessReviewHistoryDefinition>|null
    */
    public function getHistoryDefinitions(): ?array {
        return $this->historyDefinitions;
    }

    /**
     * Gets the policy property value. Resource that enables administrators to manage directory-level access review policies in their tenant.
     * @return AccessReviewPolicy|null
    */
    public function getPolicy(): ?AccessReviewPolicy {
        return $this->policy;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('decisions', $this->decisions);
        $writer->writeCollectionOfObjectValues('definitions', $this->definitions);
        $writer->writeCollectionOfObjectValues('historyDefinitions', $this->historyDefinitions);
        $writer->writeObjectValue('policy', $this->policy);
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
     * Sets the decisions property value. Represents an Azure AD access review decision on an instance of a review.
     *  @param array<AccessReviewInstanceDecisionItem>|null $value Value to set for the decisions property.
    */
    public function setDecisions(?array $value ): void {
        $this->decisions = $value;
    }

    /**
     * Sets the definitions property value. Represents the template and scheduling for an access review.
     *  @param array<AccessReviewScheduleDefinition>|null $value Value to set for the definitions property.
    */
    public function setDefinitions(?array $value ): void {
        $this->definitions = $value;
    }

    /**
     * Sets the historyDefinitions property value. Represents a collection of access review history data and the scopes used to collect that data.
     *  @param array<AccessReviewHistoryDefinition>|null $value Value to set for the historyDefinitions property.
    */
    public function setHistoryDefinitions(?array $value ): void {
        $this->historyDefinitions = $value;
    }

    /**
     * Sets the policy property value. Resource that enables administrators to manage directory-level access review policies in their tenant.
     *  @param AccessReviewPolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?AccessReviewPolicy $value ): void {
        $this->policy = $value;
    }

}
