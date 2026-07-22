<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ExposureCaseGitHub implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ExposureCaseGitHub and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExposureCaseGitHub
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExposureCaseGitHub {
        return new ExposureCaseGitHub();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the environmentId property value. The environmentId property
     * @return string|null
    */
    public function getEnvironmentId(): ?string {
        $val = $this->getBackingStore()->get('environmentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'environmentId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'environmentId' => fn(ParseNode $n) => $o->setEnvironmentId($n->getStringValue()),
            'issueNumber' => fn(ParseNode $n) => $o->setIssueNumber($n->getIntegerValue()),
            'issueUrl' => fn(ParseNode $n) => $o->setIssueUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'primaryAssessmentId' => fn(ParseNode $n) => $o->setPrimaryAssessmentId($n->getStringValue()),
            'repoName' => fn(ParseNode $n) => $o->setRepoName($n->getStringValue()),
        ];
    }

    /**
     * Gets the issueNumber property value. The issueNumber property
     * @return int|null
    */
    public function getIssueNumber(): ?int {
        $val = $this->getBackingStore()->get('issueNumber');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issueNumber'");
    }

    /**
     * Gets the issueUrl property value. The issueUrl property
     * @return string|null
    */
    public function getIssueUrl(): ?string {
        $val = $this->getBackingStore()->get('issueUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issueUrl'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the primaryAssessmentId property value. The primaryAssessmentId property
     * @return string|null
    */
    public function getPrimaryAssessmentId(): ?string {
        $val = $this->getBackingStore()->get('primaryAssessmentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryAssessmentId'");
    }

    /**
     * Gets the repoName property value. The repoName property
     * @return string|null
    */
    public function getRepoName(): ?string {
        $val = $this->getBackingStore()->get('repoName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'repoName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('environmentId', $this->getEnvironmentId());
        $writer->writeIntegerValue('issueNumber', $this->getIssueNumber());
        $writer->writeStringValue('issueUrl', $this->getIssueUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('primaryAssessmentId', $this->getPrimaryAssessmentId());
        $writer->writeStringValue('repoName', $this->getRepoName());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the environmentId property value. The environmentId property
     * @param string|null $value Value to set for the environmentId property.
    */
    public function setEnvironmentId(?string $value): void {
        $this->getBackingStore()->set('environmentId', $value);
    }

    /**
     * Sets the issueNumber property value. The issueNumber property
     * @param int|null $value Value to set for the issueNumber property.
    */
    public function setIssueNumber(?int $value): void {
        $this->getBackingStore()->set('issueNumber', $value);
    }

    /**
     * Sets the issueUrl property value. The issueUrl property
     * @param string|null $value Value to set for the issueUrl property.
    */
    public function setIssueUrl(?string $value): void {
        $this->getBackingStore()->set('issueUrl', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the primaryAssessmentId property value. The primaryAssessmentId property
     * @param string|null $value Value to set for the primaryAssessmentId property.
    */
    public function setPrimaryAssessmentId(?string $value): void {
        $this->getBackingStore()->set('primaryAssessmentId', $value);
    }

    /**
     * Sets the repoName property value. The repoName property
     * @param string|null $value Value to set for the repoName property.
    */
    public function setRepoName(?string $value): void {
        $this->getBackingStore()->set('repoName', $value);
    }

}
