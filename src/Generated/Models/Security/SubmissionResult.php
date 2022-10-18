<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SubmissionResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var SubmissionResultCategory|null $category The submission result category. The possible values are: notJunk, spam, phishing, malware, allowedByPolicy, blockedByPolicy, spoof, unknown, noResultAvailable and unkownFutureValue.
    */
    private ?SubmissionResultCategory $category = null;
    
    /**
     * @var SubmissionResultDetail|null $detail Specifies the additional details provided by Microsoft to substantiate their analysis result.
    */
    private ?SubmissionResultDetail $detail = null;
    
    /**
     * @var array<SubmissionDetectedFile>|null $detectedFiles Specifies the files detected by Microsoft in the submitted emails.
    */
    private ?array $detectedFiles = null;
    
    /**
     * @var array<string>|null $detectedUrls Specifes the URLs detected by Microsoft in the submitted email.
    */
    private ?array $detectedUrls = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var UserMailboxSetting|null $userMailboxSetting Specifies the setting for user mailbox denoted by a comma-separated string.
    */
    private ?UserMailboxSetting $userMailboxSetting = null;
    
    /**
     * Instantiates a new submissionResult and sets the default values.
    */
    public function __construct() {
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the category property value. The submission result category. The possible values are: notJunk, spam, phishing, malware, allowedByPolicy, blockedByPolicy, spoof, unknown, noResultAvailable and unkownFutureValue.
     * @return SubmissionResultCategory|null
    */
    public function getCategory(): ?SubmissionResultCategory {
        return $this->category;
    }

    /**
     * Gets the detail property value. Specifies the additional details provided by Microsoft to substantiate their analysis result.
     * @return SubmissionResultDetail|null
    */
    public function getDetail(): ?SubmissionResultDetail {
        return $this->detail;
    }

    /**
     * Gets the detectedFiles property value. Specifies the files detected by Microsoft in the submitted emails.
     * @return array<SubmissionDetectedFile>|null
    */
    public function getDetectedFiles(): ?array {
        return $this->detectedFiles;
    }

    /**
     * Gets the detectedUrls property value. Specifes the URLs detected by Microsoft in the submitted email.
     * @return array<string>|null
    */
    public function getDetectedUrls(): ?array {
        return $this->detectedUrls;
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
        return $this->odataType;
    }

    /**
     * Gets the userMailboxSetting property value. Specifies the setting for user mailbox denoted by a comma-separated string.
     * @return UserMailboxSetting|null
    */
    public function getUserMailboxSetting(): ?UserMailboxSetting {
        return $this->userMailboxSetting;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('category', $this->category);
        $writer->writeEnumValue('detail', $this->detail);
        $writer->writeCollectionOfObjectValues('detectedFiles', $this->detectedFiles);
        $writer->writeCollectionOfPrimitiveValues('detectedUrls', $this->detectedUrls);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('userMailboxSetting', $this->userMailboxSetting);
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
     * Sets the category property value. The submission result category. The possible values are: notJunk, spam, phishing, malware, allowedByPolicy, blockedByPolicy, spoof, unknown, noResultAvailable and unkownFutureValue.
     *  @param SubmissionResultCategory|null $value Value to set for the category property.
    */
    public function setCategory(?SubmissionResultCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the detail property value. Specifies the additional details provided by Microsoft to substantiate their analysis result.
     *  @param SubmissionResultDetail|null $value Value to set for the detail property.
    */
    public function setDetail(?SubmissionResultDetail $value ): void {
        $this->detail = $value;
    }

    /**
     * Sets the detectedFiles property value. Specifies the files detected by Microsoft in the submitted emails.
     *  @param array<SubmissionDetectedFile>|null $value Value to set for the detectedFiles property.
    */
    public function setDetectedFiles(?array $value ): void {
        $this->detectedFiles = $value;
    }

    /**
     * Sets the detectedUrls property value. Specifes the URLs detected by Microsoft in the submitted email.
     *  @param array<string>|null $value Value to set for the detectedUrls property.
    */
    public function setDetectedUrls(?array $value ): void {
        $this->detectedUrls = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the userMailboxSetting property value. Specifies the setting for user mailbox denoted by a comma-separated string.
     *  @param UserMailboxSetting|null $value Value to set for the userMailboxSetting property.
    */
    public function setUserMailboxSetting(?UserMailboxSetting $value ): void {
        $this->userMailboxSetting = $value;
    }

}
