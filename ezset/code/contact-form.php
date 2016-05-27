<?php
/**
 * Part of lyrasoft project.
 *
 * @copyright  Copyright (C) 2015 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

$tag = JFactory::getLanguage()->getTag();
?>

<div>
	<p class="text-center lead">
		service@lyrasoft.net
	</p>

	<div class="inner-top">
		<form accept-charset="UTF-8" action="https://getform.org/f/434799ef-9f98-4579-b933-34546359a800" method="POST">

            <?php if ($tag == 'zh-TW'): ?>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="InputName" class="sr-only">Your Name</label>
						<input type="text" class="form-control" name="Name" id="InputName" placeholder="您的大名 (Your Name) *" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="InputEmail" class="sr-only">Your Email</label>
						<input type="email" class="form-control" id="InputEmail" name="Email" placeholder="您的 Email *" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="InputPhone" class="sr-only">Your Email</label>
						<input type="text" class="form-control" id="InputPhone" name="Phone" placeholder="聯絡電話 (Phone)" >
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<select class="form-control" id="InputBudget" name="Budget" required style="height: 44px">
							<option value="">-- 您的預算 (Budget) * --</option>
<!--							<option value="我要諮詢">不確定，我想先諮詢</option>-->
							<option value="小於 TWD 300,000">小於 TWD 700,000 (< USD 21,000)</option>
							<option value="TWD 300,000 ~ 800,000">TWD 700,000 ~ 1,400,000 (USD 21,000 ~ 42,000)</option>
							<option value="TWD 800,000 ~ 150,0000">TWD 1,400,000 ~ 2,100,000 (USD 42,000 ~ 63,000)</option>
							<option value="大於 TWD 150,000">大於 TWD 2,100,000 (> USD 63,000)</option>
						</select>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label for="InputMessage" class="sr-only">Message</label>
						<textarea name="Message" id="InputMessage" class="form-control" rows="5" required placeholder="詢問內容 (Message) *"></textarea>
					</div>
				</div>

				<div class="col-md-12">
					<div class="form-group">
						<input type="text" class="form-control" id="InputReference" name="Source" placeholder="您如何得知織女星科技 (How do you know LYRASOFT)">
					</div>
				</div>
			</div>

            <?php else: ?>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="InputName" class="sr-only">Your Name</label>
                        <input type="text" class="form-control" name="Name" id="InputName" placeholder="Your Name *" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="InputEmail" class="sr-only">Your Email</label>
                        <input type="email" class="form-control" id="InputEmail" name="Email" placeholder="Email *" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="InputPhone" class="sr-only">Your Email</label>
                        <input type="text" class="form-control" id="InputPhone" name="Phone" placeholder="Phone" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <select class="form-control" id="InputBudget" name="Budget" required style="height: 44px">
                            <option value="">-- Budget * --</option>
<!--                            <option value="我要諮詢">不確定，我想先諮詢</option>-->
                            <option value="< USD 21,000">Less than USD 21,000</option>
                            <option value="USD 21,000 ~ 42,000">USD 21,000 ~ 42,000</option>
                            <option value="USD 42,000 ~ 63,000">USD 42,000 ~ 63,000</option>
                            <option value="> USD 63,000">Greater than USD 63,000</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="InputMessage" class="sr-only">Message</label>
                        <textarea name="Message" id="InputMessage" class="form-control" rows="5" required placeholder="Message *"></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" class="form-control" id="InputReference" name="Source" placeholder="How do you know LYRASOFT">
                    </div>
                </div>
            </div>

            <?php endif; ?>

			<div class="text-center">
				<button type="submit" class="contact-submit btn btn-primary btn-large btn-info">
					SUBMIT
				</button>
			</div>
		</form>
	</div>

</div>

