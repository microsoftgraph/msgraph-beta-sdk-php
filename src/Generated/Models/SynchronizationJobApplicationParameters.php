<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationJobApplicationParameters implements AdditionalDataHolder, Parsable 
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
     * @var string|null $ruleId The identifier of the synchronizationRule to be applied. This rule ID is defined in the schema for a given synchronization job or template.
    */
    private ?string $ruleId = null;
    
    /**
     * @var array<SynchronizationJobSubject>|null $subjects The identifiers of one or more objects to which a synchronizationJob is to be applied.
    */
    private ?array $subjects = null;
    
    /**
     * Instantiates a new synchronizationJobApplicationParameters and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.synchronizationJobApplicationParameters');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationJobApplicationParameters
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationJobApplicationParameters {
        return new SynchronizationJobApplicationParameters();
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
            'ruleId' => function (ParseNode $n) use ($o) { $o->setRuleId($n->getStringValue()); },
            'subjects' => function (ParseNode $n) use ($o) { $o->setSubjects($n->getCollectionOfObjectValues(array(SynchronizationJobSubject::class, 'createFromDiscriminatorValue'))); },
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
     * Gets the ruleId property value. The identifier of the synchronizationRule to be applied. This rule ID is defined in the schema for a given synchronization job or template.
     * @return string|null
    */
    public function getRuleId(): ?string {
        return $this->ruleId;
    }

    /**
     * Gets the subjects property value. The identifiers of one or more objects to which a synchronizationJob is to be applied.
     * @return array<SynchronizationJobSubject>|null
    */
    public function getSubjects(): ?array {
        return $this->subjects;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('ruleId', $this->ruleId);
        $writer->writeCollectionOfObjectValues('subjects', $this->subjects);
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
     * Sets the ruleId property value. The identifier of the synchronizationRule to be applied. This rule ID is defined in the schema for a given synchronization job or template.
     *  @param string|null $value Value to set for the ruleId property.
    */
    public function setRuleId(?string $value ): void {
        $this->ruleId = $value;
    }

    /**
     * Sets the subjects property value. The identifiers of one or more objects to which a synchronizationJob is to be applied.
     *  @param array<SynchronizationJobSubject>|null $value Value to set for the subjects property.
    */
    public function setSubjects(?array $value ): void {
        $this->subjects = $value;
    }

}
