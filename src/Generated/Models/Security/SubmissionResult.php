<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SubmissionResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new submissionResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.security.submissionResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubmissionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubmissionResult {
        return new SubmissionResult();
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
     * Gets the category property value. The submission result category. The possible values are: notJunk, spam, phishing, malware, allowedByPolicy, blockedByPolicy, spoof, unknown, noResultAvailable and unkownFutureValue.
     * @return SubmissionResultCategory|null
    */
    public function getCategory(): ?SubmissionResultCategory {
        return $this->getBackingStore()->get('category');
    }

    /**
     * Gets the detail property value. Specifies the additional details provided by Microsoft to substantiate their analysis result.
     * @return SubmissionResultDetail|null
    */
    public function getDetail(): ?SubmissionResultDetail {
        return $this->getBackingStore()->get('detail');
    }

    /**
     * Gets the detectedFiles property value. Specifies the files detected by Microsoft in the submitted emails.
     * @return array<SubmissionDetectedFile>|null
    */
    public function getDetectedFiles(): ?array {
        return $this->getBackingStore()->get('detectedFiles');
    }

    /**
     * Gets the detectedUrls property value. Specifes the URLs detected by Microsoft in the submitted email.
     * @return array<string>|null
    */
    public function getDetectedUrls(): ?array {
        return $this->getBackingStore()->get('detectedUrls');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(SubmissionResultCategory::class)),
            'detail' => fn(ParseNode $n) => $o->setDetail($n->getEnumValue(SubmissionResultDetail::class)),
            'detectedFiles' => fn(ParseNode $n) => $o->setDetectedFiles($n->getCollectionOfObjectValues([SubmissionDetectedFile::class, 'createFromDiscriminatorValue'])),
            'detectedUrls' => fn(ParseNode $n) => $o->setDetectedUrls($n->getCollectionOfPrimitiveValues()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'userMailboxSetting' => fn(ParseNode $n) => $o->setUserMailboxSetting($n->getEnumValue(UserMailboxSetting::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the userMailboxSetting property value. Specifies the setting for user mailbox denoted by a comma-separated string.
     * @return UserMailboxSetting|null
    */
    public function getUserMailboxSetting(): ?UserMailboxSetting {
        return $this->getBackingStore()->get('userMailboxSetting');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeEnumValue('detail', $this->getDetail());
        $writer->writeCollectionOfObjectValues('detectedFiles', $this->getDetectedFiles());
        $writer->writeCollectionOfPrimitiveValues('detectedUrls', $this->getDetectedUrls());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('userMailboxSetting', $this->getUserMailboxSetting());
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
     * Sets the category property value. The submission result category. The possible values are: notJunk, spam, phishing, malware, allowedByPolicy, blockedByPolicy, spoof, unknown, noResultAvailable and unkownFutureValue.
     *  @param SubmissionResultCategory|null $value Value to set for the category property.
    */
    public function setCategory(?SubmissionResultCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the detail property value. Specifies the additional details provided by Microsoft to substantiate their analysis result.
     *  @param SubmissionResultDetail|null $value Value to set for the detail property.
    */
    public function setDetail(?SubmissionResultDetail $value): void {
        $this->getBackingStore()->set('detail', $value);
    }

    /**
     * Sets the detectedFiles property value. Specifies the files detected by Microsoft in the submitted emails.
     *  @param array<SubmissionDetectedFile>|null $value Value to set for the detectedFiles property.
    */
    public function setDetectedFiles(?array $value): void {
        $this->getBackingStore()->set('detectedFiles', $value);
    }

    /**
     * Sets the detectedUrls property value. Specifes the URLs detected by Microsoft in the submitted email.
     *  @param array<string>|null $value Value to set for the detectedUrls property.
    */
    public function setDetectedUrls(?array $value): void {
        $this->getBackingStore()->set('detectedUrls', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the userMailboxSetting property value. Specifies the setting for user mailbox denoted by a comma-separated string.
     *  @param UserMailboxSetting|null $value Value to set for the userMailboxSetting property.
    */
    public function setUserMailboxSetting(?UserMailboxSetting $value): void {
        $this->getBackingStore()->set('userMailboxSetting', $value);
    }

}
