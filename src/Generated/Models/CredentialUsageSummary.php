<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CredentialUsageSummary extends Entity implements Parsable 
{
    /**
     * @var UsageAuthMethod|null $authMethod The authMethod property
    */
    private ?UsageAuthMethod $authMethod = null;
    
    /**
     * @var int|null $failureActivityCount Provides the count of failed resets or registration data.
    */
    private ?int $failureActivityCount = null;
    
    /**
     * @var FeatureType|null $feature The feature property
    */
    private ?FeatureType $feature = null;
    
    /**
     * @var int|null $successfulActivityCount Provides the count of successful registrations or resets.
    */
    private ?int $successfulActivityCount = null;
    
    /**
     * Instantiates a new CredentialUsageSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.credentialUsageSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CredentialUsageSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CredentialUsageSummary {
        return new CredentialUsageSummary();
    }

    /**
     * Gets the authMethod property value. The authMethod property
     * @return UsageAuthMethod|null
    */
    public function getAuthMethod(): ?UsageAuthMethod {
        return $this->authMethod;
    }

    /**
     * Gets the failureActivityCount property value. Provides the count of failed resets or registration data.
     * @return int|null
    */
    public function getFailureActivityCount(): ?int {
        return $this->failureActivityCount;
    }

    /**
     * Gets the feature property value. The feature property
     * @return FeatureType|null
    */
    public function getFeature(): ?FeatureType {
        return $this->feature;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authMethod' => function (ParseNode $n) use ($o) { $o->setAuthMethod($n->getEnumValue(UsageAuthMethod::class)); },
            'failureActivityCount' => function (ParseNode $n) use ($o) { $o->setFailureActivityCount($n->getIntegerValue()); },
            'feature' => function (ParseNode $n) use ($o) { $o->setFeature($n->getEnumValue(FeatureType::class)); },
            'successfulActivityCount' => function (ParseNode $n) use ($o) { $o->setSuccessfulActivityCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the successfulActivityCount property value. Provides the count of successful registrations or resets.
     * @return int|null
    */
    public function getSuccessfulActivityCount(): ?int {
        return $this->successfulActivityCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authMethod', $this->authMethod);
        $writer->writeIntegerValue('failureActivityCount', $this->failureActivityCount);
        $writer->writeEnumValue('feature', $this->feature);
        $writer->writeIntegerValue('successfulActivityCount', $this->successfulActivityCount);
    }

    /**
     * Sets the authMethod property value. The authMethod property
     *  @param UsageAuthMethod|null $value Value to set for the authMethod property.
    */
    public function setAuthMethod(?UsageAuthMethod $value ): void {
        $this->authMethod = $value;
    }

    /**
     * Sets the failureActivityCount property value. Provides the count of failed resets or registration data.
     *  @param int|null $value Value to set for the failureActivityCount property.
    */
    public function setFailureActivityCount(?int $value ): void {
        $this->failureActivityCount = $value;
    }

    /**
     * Sets the feature property value. The feature property
     *  @param FeatureType|null $value Value to set for the feature property.
    */
    public function setFeature(?FeatureType $value ): void {
        $this->feature = $value;
    }

    /**
     * Sets the successfulActivityCount property value. Provides the count of successful registrations or resets.
     *  @param int|null $value Value to set for the successfulActivityCount property.
    */
    public function setSuccessfulActivityCount(?int $value ): void {
        $this->successfulActivityCount = $value;
    }

}
